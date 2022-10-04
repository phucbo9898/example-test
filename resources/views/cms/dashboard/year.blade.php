@extends('cms.layout.layout')
@section('content-main')
@section('statistic_year', 'active')
    <span style="font-size: 40px; margin-left: 15px;">Dashboard</span><hr>
    <div>
        <span style="font-size: 30px; margin-left: 15px;">Statistic of order</span>
        <hr style="width: 225px; margin-right: 1050px; margin-top: 0px !important;">
        <canvas id="myChartOrder" style="width:900px !important; height:500px !important; margin:0 auto;"></canvas>
    </div>
    <br><br>
    <div>
        <span style="font-size: 30px; margin-left: 15px;">Statistics of total order earning</span>
        <hr style="width: 387px; margin-right: 887px; margin-top: 0px !important;">
        <canvas id="myChartTotalOrder" style="width: 900px !important; height: 500px !important; margin: 0 auto;"></canvas>
    </div>
    <br><br>

    <script>
        var ctx = document.getElementById('myChartOrder').getContext('2d');
        var data_order = <?= json_encode($data_order); ?>;
        var myChartOrder = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                    label: 'Order statistics for the year',
                    data: data_order,
                    backgroundColor: [
                        'rgba(255, 20, 147, 0.2)',
                        'rgba(0, 255, 255, 0.2)',
                        'rgba(0, 0, 255, 0.2)',
                        'rgba(138, 43, 226, 0.2)',
                        'rgba(165, 42, 42, 0.2)',
                        'rgba(222, 184, 135, 0.2)',
                        'rgba(95, 158, 160, 0.2)',
                        'rgba(127, 255, 0, 0.2)',
                        'rgba(210, 105, 30, 0.2)',
                        'rgba(100, 149, 237, 0.2)',
                        'rgba(220, 20, 60, 0.2)',
                        'rgba(0, 255, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 20, 147, 1)',
                        'rgba(0, 255, 255, 1)',
                        'rgba(0, 0, 255, 1)',
                        'rgba(138, 43, 226, 1)',
                        'rgba(165, 42, 42, 1)',
                        'rgba(222, 184, 135, 1)',
                        'rgba(95, 158, 160, 1)',
                        'rgba(127, 255, 0, 1)',
                        'rgba(210, 105, 30, 1)',
                        'rgba(100, 149, 237, 1)',
                        'rgba(220, 20, 60, 1)',
                        'rgba(0, 255, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    </script>

    <script>
        var ctx = document.getElementById('myChartTotalOrder').getContext('2d');
        var data_total = <?= json_encode($data_total); ?>;

        var myChartTotalOrder = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                    label: 'Statistic total of orders for the year',
                    data: data_total,
                    backgroundColor: [
                        'rgba(255, 20, 147, 0.2)',
                        'rgba(0, 255, 255, 0.2)',
                        'rgba(0, 0, 255, 0.2)',
                        'rgba(138, 43, 226, 0.2)',
                        'rgba(165, 42, 42, 0.2)',
                        'rgba(222, 184, 135, 0.2)',
                        'rgba(95, 158, 160, 0.2)',
                        'rgba(127, 255, 0, 0.2)',
                        'rgba(210, 105, 30, 0.2)',
                        'rgba(100, 149, 237, 0.2)',
                        'rgba(220, 20, 60, 0.2)',
                        'rgba(0, 255, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 20, 147, 1)',
                        'rgba(0, 255, 255, 1)',
                        'rgba(0, 0, 255, 1)',
                        'rgba(138, 43, 226, 1)',
                        'rgba(165, 42, 42, 1)',
                        'rgba(222, 184, 135, 1)',
                        'rgba(95, 158, 160, 1)',
                        'rgba(127, 255, 0, 1)',
                        'rgba(210, 105, 30, 1)',
                        'rgba(100, 149, 237, 1)',
                        'rgba(220, 20, 60, 1)',
                        'rgba(0, 255, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
