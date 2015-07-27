@extends('app')

@section('content')

<div class="row">
    @include('admin.sidebar')

    <div class="col-lg-8">
    <div class="row">
        <div class="pull-right">
            <span>
                <form action="{{url('group/create')}}">
                    <button  type="submit" class="btn btn-info">Створити Групу</button>
                </form>
            </span>
        </div>
    </div>
        <div class="table-responsive">
            <table class="table">
                <th>Назва</th>
                <th>Кількість Співробітників</th>
                 @foreach($groups as $group)
                    <tr>
                        <td class="active"><a href="{{url('group/'.$group->id)}}">{{$group->name}}</a></td><td class="active">1</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection