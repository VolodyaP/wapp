@extends('app')

@section('content')

<div class="row">
    <div class="col-lg-8">
        <div class="row">
            <ul>
                <div class="table-responsive">
                <form method="post" action="{{url('group/'.$group_id.'/update')}}">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <table class="table">
                         <th>Імя</th>
                          @foreach($users as $user)
                             <tr>
                                 <td class="active">{{$user->name}}</td>
                                 <td class="active"><input type="checkbox" name="user_id[]" value="{{$user->id}}"></td>
                             </tr>
                          @endforeach
                     </table>
                     <button class="btn btn-info" id="select_users" type="submit">Вибрати</button>
                 </form>
                </div>
            </ul>
        </div>
    </div>
</div>
@endsection