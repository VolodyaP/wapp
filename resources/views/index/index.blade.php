@extends('app')

@section('content')

<div class="row">
    @include('admin.sidebar')
    <div class="col-lg-8">
        <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <h2>Події</h2>
            </div>
            <div class="pull-right">
                <span>
                    <form action="{{url('event/create')}}">
                        <button  type="submit" class="btn btn-info">Створити Подію</button>
                    </form>
                </span>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <th>Дата</th>
                @if($events)
                     @foreach($events as $event)
                        <tr>
                            <td class="active"><a href="{{url('')}}">{{$event->date}}</a></td>
                        </tr>
                     @endforeach
                 @endif
            </table>
        </div>
    </div>
</div>
@endsection