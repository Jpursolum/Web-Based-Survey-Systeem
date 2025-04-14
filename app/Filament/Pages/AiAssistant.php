<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Http;

class AiAssistant extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-sparkles';
    protected static string $view = 'filament.pages.ai-assistant';
    protected static ?string $navigationLabel = 'AI Generator';

    public $prompt;
    public $result;
    public $loading = false;  // <-- Initialize loading here
    public $history = [];

    public function generateWithAI()
    {
        $this->loading = true; // Set loading state

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.openrouter.key'),
            'HTTP-Referer' => 'http://localhost', // Palitan mo kung may domain ka
            'X-Title' => 'DICT AI Assistant',
        ])->post('https://openrouter.ai/api/v1/chat/completions', [
            'model' => 'openai/gpt-3.5-turbo', // or pwede mong palitan with other models like 'mistralai/mixtral-8x7b ' openai/gpt-3.5-turbo
            'messages' => [
                ['role' => 'user', 'content' => $this->prompt],
            ],
        ]);

        // Handle the response and errors
        if (!$response->ok()) {
            $error = $response->json();
            $this->result = "⚠️ AI Error: " . ($error['error']['message'] ?? 'Unknown error');
            $this->loading = false;
            return;
        }

        $data = $response->json();

        if (!isset($data['choices'][0]['message']['content'])) {
            $this->result = "⚠️ AI Error: Invalid response format.";
            $this->loading = false;
            return;
        }

        $this->result = $data['choices'][0]['message']['content'];

        // Save history entry
        $this->history[] = [
            'prompt' => $this->prompt,
            'result' => $this->result
        ];

        $this->loading = false; // End loading state
    }
}
