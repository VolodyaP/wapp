@extends('app')

@section('content')

<div class="container-fluid">
 <div class="row">

    <div class="col-lg-12 wedding-section">
        <div class="pull-right">
            <span>
                <form action="{{url('event/'.$event->id.'/partners')}}">
                    <button  type="submit" class="btn btn-info">Додати Партнера</button>
                </form>
            </span>
        </div>
        <div class="row">
            <div class="col-md-5 col-md-offset-5"><h3>{{$event->date}} {{$event->place}}</h3></div>
        </div>
        <div class="col-md-12">
            <div class="col-md-4 col-md-offset-2">
                <ul>
                    <li>Наречений: {{$event->male_name}}</li>
                    <li>Телефон:</li>
                    <li>VK:</li>
                    <li>Facebook:</li>
                </ul>
            </div>
            <div  class="col-md-4 col-md-offset-2">
                <ul>
                    <li>Наречена: {{$event->female_name}}</li>
                    <li>Телефон:</li>
                    <li>VK:</li>
                    <li>Facebook:</li>
                </ul>
            </div>

            <div class="col-md-12 " style="border-top: 1px solid #e9c5cc;">
                <div class="col-md-6 col-md-offset-5">
                    <ul>
                        <li>Кількість гостей: {{$event->guests_count}}</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="col-lg-12">
            @if(count($partners) > 0)
                <span>Партнери:</span>
                <div>
                    <table class="table">
                        @foreach($partners as $partner)
                            <tr class="custom-front-table">
                                <td>{{$partner->name}}</td>
                                <td class="success">{{$partner->type}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            @endif
        </div>
    </div>
  </div>
</div>
@endsection