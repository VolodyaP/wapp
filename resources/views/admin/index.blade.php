@extends('app')

@section('content')

<div class="row">
    @include('admin.sidebar')
    <div class="col-lg-8">
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
                        <td class="active text-right"><span style="padding: 3px"><a href="{{url('admin/user/'.$user->id.'/approve')}}">approve</a></span><span style="padding: 3px"><a href="{{url('admin/user/'.$user->id.'/reject')}}">reject</a></span></td>
                    </tr>
                @endforeach
             </table>
        </div>
    </div>
</div>

@endsection