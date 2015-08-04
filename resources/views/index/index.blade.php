@extends('app')

@section('content')

<div class="row">
    <div class="col-lg-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-3">
                <h3>{{$group->name}}</h3>
            </div>
            <div class="col-md-2 col-md-offset-2">
                <h2>Події</h2>
            </div>
            <div class="pull-right">
                <span>
                    <form action="{{url('event/create')}}">
                        <button  type="submit" class="btn btn-info">Створити Нову Подію</button>
                    </form>
                </span>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <th>Дата</th>
                <th></th>
                <th></th>
                @if($events)
                     @foreach($events as $event)
                        <tr>
                            <td class="active"><a href="{{url('event/'.$event->id)}}">{{$event->date}}</a></td>
                            <td class="active "><a href="{{url('event/'.$event->id)}}"><span class="col-md-offset-4">{{$event->male_name}} та {{$event->female_name}}</span></a></td>
                            <td class="active"><a href="{{url('event/'.$event->id)}}"><span class="col-md-offset-4">{{$event->place}}</span></a></td>
                        </tr>
                     @endforeach
                 @endif
            </table>
        </div>
    </div>
</div>
@endsection