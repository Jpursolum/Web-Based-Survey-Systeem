<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Cache\RateLimiter;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function store(Request $request)
    {
        // 🕵️‍♂️ Honeypot check
        if (!empty($request->input('website'))) {
            return redirect()->back()->withErrors(['error' => 'Bot detected.']);
        }

        // 🚫 Throttle check per IP (1 every 5 mins)
        $key = 'survey-submit:' . $request->ip();
        $limiter = app(RateLimiter::class);

        if ($limiter->tooManyAttempts($key, 1)) {
            $seconds = $limiter->availableIn($key);
            $minutes = ceil($seconds / 60);
            return redirect()->back()->withErrors([
                'error' => "Too many submissions. Please try again in $minutes minute(s)."
            ]);
        }

        $limiter->hit($key, 300); // Lock for 5 minutes (300 seconds)

        // ✅ Validate the form
        $validated = $request->validate([
            'email' => 'nullable|email',
            'client_type' => 'required|string',
            'date' => 'required|date',
            'sex' => 'required|string',
            'age' => 'required|string',
            'region' => 'required|string',
            'service_availed' => 'required|string',
            'transaction_mode' => 'required|string',
            'awareness_cc' => 'required|string',
            'visibility_cc' => 'required|string',
            'usefulness_cc' => 'required|string',

            'SQD0' => 'nullable|string',
            'SQD1' => 'nullable|string',
            'SQD2' => 'nullable|string',
            'SQD3' => 'nullable|string',
            'SQD4' => 'nullable|string',
            'SQD5' => 'nullable|string',
            'SQD6' => 'nullable|string',
            'SQD7' => 'nullable|string',
            'SQD8' => 'nullable|string',
        ]);

        // 💾 Save the response
        Survey::create($validated);

        session()->flash('success', 'Survey submitted successfully!');
        return redirect()->back();
    }

    public function export(Request $request)
    {
        $surveys = Survey::query();

        if ($request->has('sex') && $request->sex != '') {
            $surveys->where('sex', $request->sex);
        }

        if ($request->has('age') && $request->age != '') {
            $surveys->where('age', $request->age);
        }

        if ($request->has('region') && $request->region != '') {
            $surveys->where('region', $request->region);
        }

        $surveys = $surveys->get();
        $filename = "surveys_" . now()->format('Ymd_His') . ".csv";

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
        ];

        $callback = function () use ($surveys) {
            $file = fopen('php://output', 'w');
            fputcsv($file, [
                'Email', 'Client Type', 'Date', 'Sex', 'Age', 'Region',
                'Service Availed', 'Transaction Mode', 'Awareness CC',
                'Visibility CC', 'Usefulness CC', 'SQD0', 'SQD1', 'SQD2',
                'SQD3', 'SQD4', 'SQD5', 'SQD6', 'SQD7', 'SQD8'
            ]);

            foreach ($surveys as $survey) {
                fputcsv($file, [
                    $survey->email,
                    $survey->client_type,
                    $survey->date,
                    $survey->sex,
                    $survey->age,
                    $survey->region,
                    $survey->service_availed,
                    $survey->transaction_mode,
                    $survey->awareness_cc,
                    $survey->visibility_cc,
                    $survey->usefulness_cc,
                    $survey->SQD0,
                    $survey->SQD1,
                    $survey->SQD2,
                    $survey->SQD3,
                    $survey->SQD4,
                    $survey->SQD5,
                    $survey->SQD6,
                    $survey->SQD7,
                    $survey->SQD8,
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
