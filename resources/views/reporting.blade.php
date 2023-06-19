@extends('layouts.navbar')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Grafik Pendapatan</div>
                    <div class="card-body">
                        <div id="grafik"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        var income = <php? echo json_encode($total_incom) ?>;
        var month = <php? echo json_encode($month) ?>;
        Highcharts.chart('grafik', {
            title : {text : 'Grafik Pendapatan per Bulan'},
            xAxis : {category : month},
            yAxis : {text : 'Nominal Pendapatan'},
            plotOptions : {series : {allowPointSelect : true}},
            series : [
                {
                    name : 'Grafik Pendapatan',
                    data : pendapatan
                }
            ]
        })
    </script>
@endsection 