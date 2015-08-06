@extends('app')

@section('content')

<div class="row">
    @include('admin.sidebar')

    <div class="col-lg-8">
        <div class="row">
            <div class="pull-right" style="padding: 20px">
                <span>
                    <form action="{{url('partner/type/create')}}">
                        <button  type="submit" class="btn btn-info">Створити Тип</button>
                    </form>
                </span>
            </div>
        </div>

        <div class="table-responsive col-md-12">
            <div>
                <h3>Тип Партнера:</h3>
            </div>
            <table class="table">
                <th></th>
                 @foreach($types as $type)
                    <tr>
                        <td class="active">{{$type->name}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection