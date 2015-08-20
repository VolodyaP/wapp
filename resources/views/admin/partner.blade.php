@extends('app')

@section('content')

<div class="container">
    <div class="row">
        <div class="pull-right">
            <span>
                <form action="{{url('partner/type/create')}}">
                    <button  type="submit" class="btn btn-info">Створити Тип</button>
                </form>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive col-md-12">
            <div>
                <h3>Тип Партнера:</h3>
            </div>
            <table class="table custom-front-table">
                 @foreach($types as $type)
                    <tr>
                        <td class="">{{$type->name}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection