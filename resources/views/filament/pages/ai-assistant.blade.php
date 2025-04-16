<div 
    class="w-full max-w-screen-2xl mx-auto p-6 bg-white dark:bg-gray-900 rounded-lg shadow-lg space-y-6"
    x-data="{
        showHistory: true,
        sendOnEnter(e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                $wire.generateWithAI();
            }
        }
    }"
>
    <!-- Logo -->
    <div class="flex justify-center">
        <img src="{{ asset('images/image.png') }}" alt="Logo" class="h-8">
    </div>

<!-- Header -->
<div class="p-4 border-b border-gray-200 dark:border-gray-700 text-center bg-gray-50 dark:bg-gray-800 rounded-xl">
    <h2 class="text-lg font-semibold text-gray-800 dark:text-white">SurveyBuddy AI Assistant 🤖</h2>
</div>

<!-- Tabs -->
<div class="flex justify-center gap-2 p-3 bg-gray-50 dark:bg-gray-800 border-b dark:border-gray-700 flex-wrap rounded-xl">
    @foreach([
        'chat' => '💬 Chat', 
        'generate' => '🧠 Generate', 
        'summarize' => '📋 Summarize', 
        'analyze' => '📊 Analyze', 
        'suggest' => '💡 Suggest'
    ] as $key => $label)
        <button
            wire:click="$set('activeTab', '{{ $key }}')"
            class="px-4 py-1.5 rounded-full text-sm font-medium transition 
                {{ $activeTab === $key 
                    ? 'bg-blue-600 text-white' 
                    : 'bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-600' }}">
            {{ $label }}
        </button>
    @endforeach
</div>

<!-- Chat Log -->
<div class="flex-1 overflow-y-auto space-y-6 px-1 py-2">
    @foreach($history as $entry)
        <!-- User Message -->
        <div class="flex items-start gap-2">
            <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center text-xs font-bold">U</div>
            <div class="bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl p-3 max-w-[75%]">
                <p class="text-xs text-gray-500 mb-1 font-medium">You ({{ strtoupper($entry['tab']) }})</p>
                <p class="text-sm text-gray-800 dark:text-white whitespace-pre-wrap">{{ $entry['prompt'] }}</p>
            </div>
        </div>

        <!-- AI Response -->
        <div class="flex items-start justify-end gap-2">
            <div class="bg-blue-600 text-white rounded-xl p-3 max-w-[75%] shadow">
                <p class="text-xs text-white mb-1 font-medium">AI</p>
                <p class="text-sm whitespace-pre-wrap">{{ $entry['result'] }}</p>
            </div>
            <div class="w-8 h-8 bg-gray-800 text-white rounded-full flex items-center justify-center text-xs font-bold">🤖</div>
        </div>
    @endforeach

    @if ($loading)
        <div class="flex justify-center items-center space-x-2 text-blue-500">
            <div class="w-5 h-5 border-4 border-blue-500 border-t-transparent rounded-full animate-spin"></div>
            <span>Thinking...</span>
        </div>
    @endif
</div>

<!-- Input Area -->
<div class="border-t dark:border-gray-700 p-4 bg-gray-50 dark:bg-gray-800 rounded-xl">
    @if ($activeTab === 'chat')
        <input type="text" wire:model.defer="prompt" placeholder="Type a message..." x-on:keydown="sendOnEnter"
            class="w-full px-4 py-3 rounded-lg bg-white dark:bg-gray-900 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-700" />
    @elseif ($activeTab === 'generate')
        <input type="text" wire:model.defer="topic" placeholder="Topic for survey questions..." x-on:keydown="sendOnEnter"
            class="w-full px-4 py-3 rounded-lg bg-white dark:bg-gray-900 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-700" />
    @elseif ($activeTab === 'summarize')
        <textarea wire:model.defer="feedbackText" placeholder="Paste feedback to summarize..." x-on:keydown="sendOnEnter"
            class="w-full px-4 py-3 rounded-lg bg-white dark:bg-gray-900 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-700"></textarea>
    @elseif ($activeTab === 'analyze')
        <textarea wire:model.defer="surveyData" placeholder="Paste survey data to analyze..." x-on:keydown="sendOnEnter"
            class="w-full px-4 py-3 rounded-lg bg-white dark:bg-gray-900 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-700"></textarea>
    @elseif ($activeTab === 'suggest')
        <textarea wire:model.defer="problemContext" placeholder="Describe the situation..." x-on:keydown="sendOnEnter"
            class="w-full px-4 py-3 rounded-lg bg-white dark:bg-gray-900 text-gray-900 dark:text-white border border-gray-300 dark:border-gray-700"></textarea>
    @endif

    <!-- Send Button -->
    <div class="flex justify-end mt-2">
        <button
            wire:click="generateWithAI"
            wire:loading.attr="disabled"
            class="flex items-center gap-2 px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 dark:hover:bg-blue-500 shadow">
            <span>Send</span>
            <span wire:loading class="animate-pulse">⏳</span>
            <span wire:loading.remove>🚀</span>
        </button>
    </div>
</div>

<div class="flex justify-end">
    <button 
        class="text-sm px-4 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded hover:bg-gray-300 dark:hover:bg-gray-600 transition"
        @click="showHistory = !showHistory"
    >
        <span x-text="showHistory ? '🙈 Hide History' : '📖 Show History'"></span>
    </button>
</div>


<!-- Chat History -->
@if (!empty($history))
    <div 
        class="pt-6 border-t border-gray-300 dark:border-gray-700"
        x-show="showHistory"
        x-transition
    >
        <h3 class="font-bold mb-2 text-gray-800 dark:text-white">🕘 History</h3>
        <ul class="space-y-3 max-h-64 overflow-y-auto text-sm">
            @foreach($history as $entry)
                <li class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 p-3 rounded-lg shadow">
                    <div class="text-blue-600 dark:text-blue-400 font-medium">({{ strtoupper($entry['tab']) }})</div>
                    <div><span class="font-bold">You:</span> {{ $entry['prompt'] }}</div>
                    <div><span class="font-bold">AI:</span> {{ $entry['result'] }}</div>
                </li>
            @endforeach
        </ul>
    </div>
@endif


