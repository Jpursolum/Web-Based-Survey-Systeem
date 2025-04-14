<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <!-- Logo Centered -->
    <div class="flex justify-center mb-6">
        <!-- Adjusted logo size to a smaller height (e.g., h-12 for 48px) -->
        <img src="{{ asset('images/image.png') }}" alt="Your Logo" class="h-8"> <!-- Update path to your logo -->
    </div>

    <!-- Heading -->
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-6">AI Assistant</h2>

    <!-- Chat Messages -->
    <div class="space-y-4 overflow-y-auto h-96 p-4 bg-gray-50 rounded-lg border border-gray-300">
        <!-- User Message -->
        <div class="flex justify-end">
            <div class="bg-blue-600 text-white p-3 rounded-lg max-w-md shadow-md">
                <p class="text-sm">{{ $prompt }}</p>
            </div>
        </div>

        <!-- AI Message -->
        @if ($result)
        <div class="flex justify-start">
            <div class="bg-gray-200 text-gray-800 p-3 rounded-lg max-w-md shadow-md">
                <p class="text-sm">{{ $result }}</p>
            </div>
        </div>
        @endif
    </div>

    <!-- Loading Spinner -->
    @if ($loading)
        <div class="flex justify-center items-center mt-4">
            <div class="w-8 h-8 border-4 border-t-4 border-blue-600 rounded-full animate-spin"></div>
            <p class="ml-4 text-gray-700">Processing your request...</p>
        </div>
    @endif

    <!-- Input Section -->
    <form wire:submit.prevent="generateWithAI" class="mt-4 flex items-center space-x-3">
        <input type="text" wire:model="prompt" placeholder="Enter your query..." class="flex-1 border border-gray-300 rounded-lg p-3 focus:ring-blue-500 focus:border-blue-500" />
        <button type="submit" class="bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 focus:outline-none transition duration-300">
            Send
        </button>
    </form>
</div>
