@extends('app')

@section('content')

<div class="row">
            @include('index.sidebar')
    <div class="col-lg-9">
        <div class="pull-right">
            <span>
                <form action="{{url('event/'.$event->id.'/partners')}}">
                    <button  type="submit" class="btn btn-info">Додати Партнера</button>
                </form>
            </span>
        </div>

        <div class="row">
            <div class="col-md-6">Дата: {{$event->date}}</div>
            <div class="col-md-6">Заклад: {{$event->place}}</div>
        </div>

        <div>
            <div>Наречений: {{$event->male_name}}</div>
            <div>Наречена: {{$event->female_name}}</div>
            <div>Кількість гостей: {{$event->guests_count}}</div>
            <div>
                @if(count($partners) > 0)
                    <span>Партнери:</span>
                    @foreach($partners as $partner)
                        {{$partner->name}}
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection