@extends('app')

@section('content')

<div class="row">

    <div class="col-lg-8">
        <div class="row">
            <div class="col-md-6">Дата: {{$event->date}}</div>
            <div class="col-md-6">Заклад: {{$event->place}}</div>
        </div>

        <div>
            <div>Наречений: {{$event->male_name}}</div>
            <div>Наречена: {{$event->female_name}}</div>
            <div>Кількість гостей: {{$event->guests_count}}</div>
        </div>
    </div>
</div>
@endsection