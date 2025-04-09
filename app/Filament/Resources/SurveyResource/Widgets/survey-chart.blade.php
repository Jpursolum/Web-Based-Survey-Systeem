<div class="bg-white p-4 rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">{{ $this->getHeading() }}</h2>
    
    <canvas id="surveyChart"></canvas>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data passed from the widget
        const chartData = @json($this->surveyData);
        
        // Render the chart using Chart.js
        const ctx = document.getElementById('surveyChart').getContext('2d');
        new Chart(ctx, {
            type: 'pie', // Change to 'bar' or 'line' if you want a different chart type
            data: chartData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        enabled: true
                    }
                }
            });
    </script>
@endpush
