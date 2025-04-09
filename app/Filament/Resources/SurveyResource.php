<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SurveyResource\Pages;
use App\Models\Survey;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Pages\ListRecords;  // Correct namespace for ListRecords
use App\Filament\Widgets\SurveyChart; // Your custom chart widget

class ListSurveys extends ListRecords
{
    protected static string $resource = SurveyResource::class;

    protected function getWidgets(): array
    {
        return [
            SurveyChart::class, // Adding the custom chart widget to the list page
        ];
    }
}
class SurveyResource extends Resource
{
    protected static ?string $model = Survey::class;
    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';
    protected static ?string $navigationGroup = 'Survey Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Personal Information')
                    ->schema([
                        TextInput::make('email')->nullable(),
                        Select::make('client_type')
                            ->label('Client Type')
                            ->options([
                                'Citizen' => 'Citizen',
                                'Business' => 'Business',
                                'Government' => 'Government',
                            ])->required(),
                        DatePicker::make('date')->label('Date of Transaction')->required(),
                        Select::make('sex')
                            ->label('Gender')
                            ->options([
                                'Male' => 'Male',
                                'Female' => 'Female',
                                'Prefer not to say' => 'Prefer not to say',
                            ])->required(),
                        Select::make('age')
                            ->label('Age Range')
                            ->options([
                                '18-25' => '18-25',
                                '26-35' => '26-35',
                                '36-45' => '36-45',
                                '46-60' => '46-60',
                                '60+' => '60 and above',
                            ])->required(),
                    ]),

                Fieldset::make('Transaction Details')
                    ->schema([
                        TextInput::make('region')->label('Region')->required(),
                        TextInput::make('service_availed')->label('Service Availed')->required(),
                        Select::make('transaction_mode')
                            ->label('Transaction Mode')
                            ->options([
                                'Physical' => 'Physical Transaction',
                                'Online' => 'Online Transaction',
                                'Both' => 'Both',
                            ])->required(),
                    ]),

                Fieldset::make('Customer Charter Awareness')
                    ->schema([
                        Select::make('awareness_cc')
                            ->label('Are you aware of the Customer Charter (CC)?')
                            ->options([
                                'Yes' => 'Yes',
                                'No' => 'No',
                            ])->required(),
                        Select::make('visibility_cc')
                            ->label('Was the CC visible to you?')
                            ->options([
                                'Yes' => 'Yes',
                                'No' => 'No',
                            ])->required(),
                        Select::make('usefulness_cc')
                            ->label('How useful was the CC for your transaction?')
                            ->options([
                                'Yes' => 'Yes',
                                'No' => 'No',
                            ])->required(),
                    ]),

                Fieldset::make('Survey Questions')
                    ->schema([
                        TextInput::make('SQD0')->nullable(),
                        TextInput::make('SQD1')->nullable(),
                        TextInput::make('SQD2')->nullable(),
                        TextInput::make('SQD3')->nullable(),
                        TextInput::make('SQD4')->nullable(),
                        TextInput::make('SQD5')->nullable(),
                        TextInput::make('SQD6')->nullable(),
                        TextInput::make('SQD7')->nullable(),
                        TextInput::make('SQD8')->nullable(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('email')->sortable()->searchable()->label('Email'),
                TextColumn::make('client_type')->sortable()->searchable()->label('Client Type'),
                TextColumn::make('date')->sortable()->label('Date'),
                TextColumn::make('sex')->sortable()->searchable()->label('Gender'),
                TextColumn::make('age')->sortable()->searchable()->label('Age'),
                TextColumn::make('region')->sortable()->searchable()->label('Region'),
                TextColumn::make('service_availed')->sortable()->searchable()->label('Service Availed'),
                TextColumn::make('transaction_mode')->sortable()->searchable()->label('Transaction Mode'),
            ])
            ->filters([
                SelectFilter::make('client_type')->options([
                    'Citizen' => 'Citizen',
                    'Business' => 'Business',
                    'Government' => 'Government',
                ]),
                SelectFilter::make('sex')->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                    'Prefer not to say' => 'Prefer not to say',
                ]),
                SelectFilter::make('age')->options([
                    '18-25' => '18-25',
                    '26-35' => '26-35',
                    '36-45' => '36-45',
                    '46-60' => '46-60',
                    '60+' => '60 and above',
                ]),
                SelectFilter::make('transaction_mode')->options([
                    'Physical' => 'Physical Transaction',
                    'Online' => 'Online Transaction',
                    'Both' => 'Both',
                ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
Action::make('exportFiltered')
    ->label('Export Filtered')
    ->icon('heroicon-o-arrow-down-tray')
    ->form([
        Select::make('sex')
            ->label('Filter by Gender')
            ->options([
                '' => 'All',
                'Male' => 'Male',
                'Female' => 'Female',
                'Prefer not to say' => 'Prefer not to say',
            ]),
        Select::make('client_type')
            ->label('Filter by Client Type')
            ->options([
                '' => 'All',
                'Citizen' => 'Citizen',
                'Business' => 'Business',
                'Government' => 'Government',
            ]),
        Select::make('age')
            ->label('Filter by Age Range')
            ->options([
                '' => 'All',
                '18-25' => '18-25',
                '26-35' => '26-35',
                '36-45' => '36-45',
                '46-60' => '46-60',
                '60+' => '60 and above',
            ]),
        Select::make('transaction_mode')
            ->label('Filter by Transaction Mode')
            ->options([
                '' => 'All',
                'Physical' => 'Physical Transaction',
                'Online' => 'Online Transaction',
                'Both' => 'Both',
            ]),
    ])
    ->action(function (array $data) {
        // Build the query parameters based on selected filters
        $query = Survey::query();
        
        // Apply filters based on the selected values
        if (!empty($data['sex'])) {
            $query->where('sex', $data['sex']);
        }
        if (!empty($data['client_type'])) {
            $query->where('client_type', $data['client_type']);
        }
        if (!empty($data['age'])) {
            $query->where('age', $data['age']);
        }
        if (!empty($data['transaction_mode'])) {
            $query->where('transaction_mode', $data['transaction_mode']);
        }

        // Get the filtered results
        $filteredSurveys = $query->get();
        
        // Build the filename based on selected filters
        $filename = 'SurveyResult_';
        $filters = [];
        
        if (!empty($data['sex'])) {
            $filters[] = 'Gender_' . $data['sex'];
        }
        if (!empty($data['client_type'])) {
            $filters[] = 'ClientType_' . $data['client_type'];
        }
        if (!empty($data['age'])) {
            $filters[] = 'Age_' . $data['age'];
        }
        if (!empty($data['transaction_mode'])) {
            $filters[] = 'TransactionMode_' . $data['transaction_mode'];
        }
        
        // If no filter is selected, use 'All' as a fallback
        if (empty($filters)) {
            $filename .= 'All';
        } else {
            $filename .= implode('_', $filters);
        }

        // Replace any spaces with underscores and append '.csv'
        $filename = str_replace(' ', '_', $filename) . '.csv';
        
        // Pass the filtered surveys to the export route
        return response()->streamDownload(function () use ($filteredSurveys) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, [
                'Email', 
                'Client Type', 
                'Date', 
                'Gender', 
                'Age', 
                'Region', 
                'Service Availed', 
                'Transaction Mode',
                'Awareness CC', 
                'Visibility CC', 
                'Usefulness CC',
                'SQD0', 'SQD1', 'SQD2', 'SQD3', 'SQD4', 'SQD5', 'SQD6', 'SQD7', 'SQD8'
            ]); // Header
            
            foreach ($filteredSurveys as $survey) {
                fputcsv($handle, [
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
                    $survey->SQD8
                ]);
            }
            
            fclose($handle);
        }, $filename, [
            'Content-Type' => 'text/csv',
        ]);
    })
    ->modalHeading('Export Filtered Surveys')
    ->color('success')
    ->requiresConfirmation(false),

            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSurveys::route('/'),
            'create' => Pages\CreateSurvey::route('/create'),
            'edit' => Pages\EditSurvey::route('/{record}/edit'),
        ];
    }
}
