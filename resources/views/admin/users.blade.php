@extends('app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Активні Кокистувачі</h2>
            </div>
        </div>
        <div class="row">
            <ul>
                <form method="post" action="">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <table class="table custom-front-table">
                         <th style="border-top: 1px solid #e9c5cc">Імя</th>
                         <th style="border-top: 1px solid #e9c5cc">Email</th>
                          @foreach($users_list as $user)
                             <tr>
                                 <td class="">{{$user->name}}</td>
                                 <td class="">{{$user->email}}</td>
                             </tr>
                          @endforeach
                     </table>
                 </form>
            </ul>
        </div>
    </div>
</div>
@endsection