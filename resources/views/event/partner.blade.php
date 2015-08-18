@extends('app')

@section('content')

<div class="row">
    <div class="container">

        <form method="POST" action="{{url('event/'.$event_id.'/add/partner')}}">
         <input class="custom-front-input" type="hidden" name="_token" value="{{ csrf_token() }}">
             <table class="table">
                  @foreach($partners as $partner)
                     <tr class="custom-front-table">
                         <td class="">{{$partner->name}}</td>
                         <td class="">{{$partner->email}}</td>
                         <td class="">{{$partner->phone}}</td>
                         <td class="info">{{$partner->type}}</td>
                         <td class=""><input type="checkbox" name="partner_id[]" value="{{$partner->id}}"></td>
                     </tr>
                  @endforeach
             </table>
             <button class="btn btn-info" id="select_users" type="submit">Вибрати</button>
         </form>
        </div>
    </ul>
</div>

@endsection