<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function store(Request $request)
    {
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

            // Allow survey questions to be nullable
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
        
        // Store the validated data
        Survey::create($validated);
    // Flash success message to the session
    session()->flash('success', 'Survey submitted successfully!');

    return redirect()->back(); // Redirect back to the previous page
    }

    public function export(Request $request)
    {
        // Start with all surveys
        $surveys = Survey::query();

        // Apply filters if provided
        if ($request->has('sex') && $request->sex != '') {
            $surveys->where('sex', $request->sex);
        }

        if ($request->has('age') && $request->age != '') {
            $surveys->where('age', $request->age);
        }

        if ($request->has('region') && $request->region != '') {
            $surveys->where('region', $request->region);
        }

        // Add any other filters you might have here...
        
        // Get the filtered results
        $surveys = $surveys->get();

        // Set the filename for export
        $filename = "surveys_" . now()->format('Ymd_His') . ".csv";
        
        // Set headers for CSV file download
        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
        ];

        // Create the CSV file and return as a response
        $callback = function() use ($surveys) {
            $file = fopen('php://output', 'w');
            
            // Add CSV column headers
            fputcsv($file, ['Email', 'Client Type', 'Date', 'Sex', 'Age', 'Region', 'Service Availed', 'Transaction Mode', 'Awareness CC', 'Visibility CC', 'Usefulness CC', 'SQD0', 'SQD1', 'SQD2', 'SQD3', 'SQD4', 'SQD5', 'SQD6', 'SQD7', 'SQD8']);
            
            // Add survey responses to CSV
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

        // Return the CSV file as a downloadable response
        return response()->stream($callback, 200, $headers);
    }
}
