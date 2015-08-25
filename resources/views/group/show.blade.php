@extends('app')

@section('content')
    <div class="container">
        <div class="row">
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
            <table class="table custom-front-table">
                <th style="border-top: 1px solid #e9c5cc">Імя</th>
                <th style="border-top: 1px solid #e9c5cc">Посада</th>
                 @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>1</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection