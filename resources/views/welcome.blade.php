<x-layout>
    <h1 class="text-sm text-gray-500 mb-6">VBYOND <span class="text-gray-500"> > </span> Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow p-6 flex flex-col">
            <span class="text-2xl font-bold">$424,652</span>
            <span class="text-gray-500">Sales</span>
            <div id="summaryChart1" class="h-16 mt-2"></div>
        </div>
        <div class="bg-white rounded-lg shadow p-6 flex flex-col">
            <span class="text-2xl font-bold">$235,312</span>
            <span class="text-gray-500">Expenses</span>
            <div id="summaryChart2" class="h-16 mt-2"></div>
        </div>
        <div class="bg-white rounded-lg shadow p-6 flex flex-col">
            <span class="text-2xl font-bold">$135,965</span>
            <span class="text-gray-500">Profits</span>
            <div id="summaryChart3" class="h-16 mt-2"></div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex justify-between items-center mb-2">
                <h2 class="text-lg font-semibold">Monthly Sales</h2>
            </div>
            <div id="mainChart1" class="h-64"></div>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold mb-2">Department Sales</h2>
            <div id="mainChart2" class="h-64"></div>
        </div>
    </div>
    <script>
        new ApexCharts(document.querySelector("#summaryChart1"), {
            chart: {
                type: 'area',
                sparkline: {
                    enabled: true
                },
                height: 60
            },
            series: [{
                data: [10, 20, 15, 30, 25, 35, 30, 40, 35]
            }],
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            fill: {
                type: 'gradient',
                gradient: {
                    stops: [0, 90, 100]
                }
            },
            colors: ['#ff0000'],
        }).render();

        new ApexCharts(document.querySelector("#summaryChart2"), {
            chart: {
                type: 'area',
                sparkline: {
                    enabled: true
                },
                height: 60
            },
            series: [{
                data: [15, 10, 20, 25, 20, 30, 25, 35, 30]
            }],
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            fill: {
                type: 'gradient',
                gradient: {
                    stops: [0, 90, 100]
                }
            },
            colors: ['#f59e42'],
        }).render();
        new ApexCharts(document.querySelector("#summaryChart3"), {
            chart: {
                type: 'area',
                sparkline: {
                    enabled: true
                },
                height: 60
            },
            series: [{
                data: [5, 15, 10, 20, 15, 25, 20, 30, 25]
            }],
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            fill: {
                type: 'gradient',
                gradient: {
                    stops: [0, 90, 100]
                }
            },
            colors: ['#0000ff'],
        }).render();

        // Main bar chart
        new ApexCharts(document.querySelector("#mainChart1"), {
            chart: {
                type: 'bar',
                height: 300
            },
            series: [{
                    name: 'Clothing',
                    data: [44, 55, 41, 67, 22, 43, 21, 49, 62, 45, 55, 60]
                },
                {
                    name: 'Food Products',
                    data: [53, 32, 33, 52, 13, 44, 32, 34, 52, 41, 49, 59]
                }
            ],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            colors: ['#06b6d4', '#60a5fa'],
            legend: {
                position: 'top'
            }
        }).render();

        // pie chart
        new ApexCharts(document.querySelector("#mainChart2"), {
            chart: {
                type: 'pie',
                height: 300
            },
            series: [44, 55, 13, 43, 22],
            labels: ['Clothing', 'Food Products', 'Electronics', 'Kitchen Utility', 'Gardening'],
            colors: ['#06b6d4', '#60a5fa', '#f59e42', '#f87171', '#a78bfa'],
            legend: {
                position: 'right'
            }
        }).render();
    </script>
</x-layout>
