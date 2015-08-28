@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Події</a></li>
                <li><a data-toggle="tab" href="#menu1">Группи</a></li>
                {{--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>--}}
                {{--<li><a data-toggle="tab" href="#menu3">Menu 3</a></li>--}}
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>Події</h3>
                    <div id="statistic_1"></div>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Співробітники</h3>
                    <div id="statistic_2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <link rel="stylesheet" href="/css/statistic.css">
    <script src="/js/statistic.js"></script>
    <script>
        statisticBarChart(<?php echo $eventStatistic?>);
        staffPieChart(<?php echo $staffStatistic?>);
    </script>

@endsection


