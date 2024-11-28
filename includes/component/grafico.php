<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="card card-info">
        <div class="card-header orange" style="background-color: orange; color: white;">
            <div class="chart-title">Constructors Table - F1 2024</div>
        </div>
        <div class="card-body">
            <div class="chart">
                <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            var lineChartCanvas = $('#lineChart').get(0).getContext('2d');
            
            // Locais das corridas da F1
            var labels = [
                'BHR', 'KSA', 'AUS', 'JPN', 'CHN', 'MMI',
                'ITA', 'MON', 'ESP', 'CAN', 'AUT', 'GBR',
                'HUN', 'BEL', 'NED', 'ITA', 'AZB', 'SGP',
                'USA', 'MEX', 'BRA', 'LAS', 'CAT', 'ABU'
            ];

            // Pontuação fictícia para as equipes
            var dataRedBull = [60, 75, 80, 90, 102, 120, 140, 160, 160, 160, 180, 220, 240, 240, 280, 340, 380, 400, 440, 480, 490, 540];
            var dataMcLaren = [25, 60, 75, 120, 155, 200, 225, 240, 255, 265, 275, 300, 325, 350, 375, 410, 435, 490, 545, 580, 600, 620]; 
            var dataFerrari = [15, 30, 45, 68, 76, 90, 105, 150, 225,  255, 285, 300, 300, 305, 325, 340, 355, 370, 385, 420, 450, 480];

            var lineChartData = {
                labels: labels,
                datasets: [
                    {
                        label: 'Red Bull',
                        backgroundColor: 'rgba(0, 0, 255, 0.5)', // Azul
                        borderColor: 'rgba(0, 0, 255, 1)',
                        pointRadius: false,
                        data: dataRedBull
                    },
                    {
                        label: 'McLaren',
                        backgroundColor: 'rgba(255, 165, 0, 0.5)', // Laranja
                        borderColor: 'rgba(255, 165, 0, 1)',
                        pointRadius: false,
                        data: dataMcLaren
                    },
                    {
                        label: 'Ferrari',
                        backgroundColor: 'rgba(255, 0, 0, 0.5)', // Vermelho
                        borderColor: 'rgba(255, 0, 0, 1)',
                        pointRadius: false,
                        data: dataFerrari
                    }
                ]
            };

            var lineChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            color: 'rgba(60,141,188,1)'
                        }
                    }
                },
                scales: {
                    x: {  grid: { display: false } },
                    y: {  grid: { display: false },
                          beginAtZero: true,
                          max: 1000 }
                }
            };

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: lineChartData,
                options: lineChartOptions
            });
        });
    </script>