@extends('app')

@section('content')
<div class="container">
    <div class="row">
     <table class="table custom-front-table">
        @foreach($users_list as $user)
            <tr class="">
                <td class="info">{{$user->name}}</td>
                <td class="">{{$user->email}}</td>
                <td class=" text-right"><span style="padding: 3px"><a href="{{url('admin/user/'.$user->id.'/approve')}}">approve</a></span><span style="padding: 3px"><a href="{{url('admin/user/'.$user->id.'/reject')}}">reject</a></span></td>
            </tr>
        @endforeach
     </table>
    </div>
</div>
@endsection