@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="pull-right">
                <span>
                    <form action="{{url('partner/create')}}">
                        <button  type="submit" class="btn btn-info">Створити Партнера</button>
                    </form>
                </span>
            </div>
        </div>

        <div class="table-responsive col-md-12">
        <div>
            <h3>Партнери</h3>
        </div>
            <table class="table">
                 @foreach($partners as $partner)
                    <tr class="custom-front-table">
                        <td>{{$partner->name}}</td>
                        <td>{{$partner->phone}}</td>
                        <td>{{$partner->email}}</td>
                        <td class="info">{{$partner->type}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection