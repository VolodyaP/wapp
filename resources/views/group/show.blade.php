@extends('app')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="pull-right">
            <span>
                <form action="{{url('group/'.$group->id.'/userlist')}}">
                    <button  type="submit" class="btn btn-info">Додати працівника</button>
                </form>
            </span>
        </div>

        <div>
            <h2>{{$group->name}}</h2>
        </div>
        <div class="table-responsive">
            <table class="table">
                <th>Імя</th>
                <th>Посада</th>
                 @foreach($users as $user)
                    <tr>
                        <td class="active">{{$user->name}}</td>
                        <td class="active">1</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection