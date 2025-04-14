<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\SurveyExportController; // <-- Add this line if you create a controller for exporting
//use App\Http\Livewire\AiGenerator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/survey', 'survey');
Route::post('/survey', [SurveyController::class, 'store'])->name('survey.submit');

// ✅ Proper export route (download CSV or Excel, etc.)
Route::get('/surveys/export', [SurveyController::class, 'export'])->name('surveys.export');

// ✅ Main page route
Route::get('/', [TemplateController::class, 'index']);

// Survey responses route
Route::get('/survey/responses', [SurveyController::class, 'index'])->name('survey.responses');

// **Fix for Livewire route**:
//Route::get('/ai', AiGenerator::class); // You can also use 'App\Http\Livewire\AiGenerator::class' but it's cleaner to just import the class like this
