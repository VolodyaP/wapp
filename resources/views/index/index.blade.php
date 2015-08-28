@extends('app')

@section('content')

<div class="row">
    <div class="container">
        <div class="row">
            <div class="pull-right">
                <span>
                    <form action="{{url('event/create')}}">
                        <button  type="submit" class="btn btn-info">Створити Нову Подію</button>
                    </form>
                </span>
            </div>
        </div>

        <div class="table-responsive col-md-12">
            <div>
                <h3>Події</h3>
            </div>

            <table class="table">
                @if($events)
                     @foreach($events as $event)
                        <tr class="custom-front-table">
                            <td class="info"><a href="{{url('event/'.$event->id)}}">{{$event->date}}</a></td>
                            <td><a href="{{url('event/'.$event->id)}}"><span class="col-md-offset-4">{{$event->male_name}} та {{$event->female_name}}</span></a></td>
                            <td><a href="{{url('event/'.$event->id)}}"><span class="col-md-offset-4">{{$event->place}}</span></a></td>
                            <td><a href="" id="wedd_edit"><span class="col-md-offset-4"><img class="wedd_action_icon" src="/img/icon/edit-icon.png"></span></a></td>
                            <td><a href="" id="wedd_delete"><span class="col-md-offset-4"><img class="wedd_action_icon" src="/img/icon/Delete_icon.png"></span></a></td>
                        </tr>
                     @endforeach
                 @endif
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.8.1/holder.js"></script>
    <script>
        sendAjax();
    </script>
@endsection