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

        Survey::create($validated);

        return back()->with('success', 'Thank you for your feedback!');
    }
}
