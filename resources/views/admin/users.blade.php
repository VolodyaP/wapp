@extends('app')

@section('content')
<div class="row">
    @include('admin.sidebar')
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Активні Кокистувачі</h2>
            </div>
        </div>
        <div class="row">
            <ul>
                <div class="table-responsive">
                <form method="post" action="">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <table class="table">
                         <th>Імя</th>
                         <th>Email</th>
                          @foreach($users_list as $user)
                             <tr>
                                 <td class="active">{{$user->name}}</td>
                                 <td class="active">{{$user->email}}</td>
                             </tr>
                          @endforeach
                     </table>
                 </form>
                </div>
            </ul>
        </div>
    </div>
</div>
@endsection