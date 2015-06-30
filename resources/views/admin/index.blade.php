@extends('app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <span><button type="button" class="btn btn-info">Створити Групу</button></span>
        <span><button type="button" class="btn btn-info">Створити Роль</button></span>
        <span><button type="button" class="btn btn-info">Події</button></span>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="groups">
            <table class="table table-hover">
                <thead>
                    <td>Імя Групи</td>
                    <td style="text-align: right">Редагувати</td>
                </thead>
                @foreach($groups_list as $group)
                    <tr class="info">
                        <td class="info">{{$group->name}}</td>
                        <td class="info" style="text-align: right"><a href=""><img src="img/edit.png" width="25px" height="25px"></a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="users">
             <table class="table table-hover">
                <thead>
                    <td>Імя Користовуча</td>
                    <td>Email</td>
                    <td style="text-align: right">Редагувати</td>
                </thead>
                @foreach($users_list as $user)
                    <tr class="info">
                        <td class="info">{{$user->name}}</td>
                        <td class="info">{{$user->email}}</td>
                        <td class="info" style="text-align: right"><a href=""><img src="img/edit.png" width="25px" height="25px"></a></td>
                    </tr>
                @endforeach
             </table>
        </div>
    </div>
</div>

@endsection