<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Http;
use App\Models\AiHistory;

class AiAssistant extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-sparkles';
    protected static string $view = 'filament.pages.ai-assistant';
    protected static ?string $navigationLabel = 'AI Generator';
    protected static ?string $navigationGroup = 'DICT AI Assistant';

    public $prompt = '';
    public $result = '';
    public $loading = false;
    public $history = [];

    public $activeTab = 'chat';

    public $topic = '';
    public $feedbackText = '';
    public $surveyData = '';
    public $problemContext = '';

    public function generateWithAI()
    {
        $this->loading = true;

        // 🧠 Build prompt based on active tab
        switch ($this->activeTab) {
            case 'generate':
                $this->prompt = "Generate survey questions about: " . $this->topic;
                break;

            case 'summarize':
                $this->prompt = "Summarize this feedback: " . $this->feedbackText;
                break;

            case 'analyze':
                $this->prompt = "Analyze this survey data: " . $this->surveyData;
                break;

            case 'suggest':
                $this->prompt = "Suggest an action based on this issue: " . $this->problemContext;
                break;

            default:
                // Chat tab: use raw prompt
                break;
        }

        // 🔗 Send AI request
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.openrouter.key'),
            'HTTP-Referer' => 'http://localhost',
            'X-Title' => 'DICT AI Assistant',
        ])->post('https://openrouter.ai/api/v1/chat/completions', [
            'model' => 'openai/gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $this->prompt],
            ],
        ]);

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



        // 🧠 Save to local history
        $this->history[] = [
            'tab' => $this->activeTab,
            'prompt' => $this->prompt,
            'result' => $this->result,
        ];

        $this->loading = false;
    }
}
