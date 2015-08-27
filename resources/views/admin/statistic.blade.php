@extends('app')
@section('content')
<div class="container">
    <div class="row">
     <p>Statistic</p>
        <div id="statistic">

        </div>
    </div>
</div>

@endsection

@section('js')
    <link rel="stylesheet" href="/css/statistic.css">
    <script src="/js/statistic.js"></script>
    <script>
        statisticBarChart(<?php echo $data?>);
    </script>

@endsection


