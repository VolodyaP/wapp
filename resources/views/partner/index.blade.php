@extends('app')

@section('content')

<div class="row">
    @include('index.sidebar')

    <div class="col-lg-8">
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
                    <tr>
                        <td class="success">{{$partner->name}}</td>
                        <td class="success">{{$partner->phone}}</td>
                        <td class="success">{{$partner->email}}</td>
                        <td class="success">{{$partner->type}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection