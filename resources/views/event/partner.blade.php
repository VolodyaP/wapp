@extends('app')

@section('content')

    @include('index.sidebar')
 <div class="row">
    <ul>
        <div class="table-responsive">
        <form method="post" action="{{url('event/'.$event_id.'/add/partner')}}">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <table class="table">
                  @foreach($partners as $partner)
                     <tr>
                         <td class="active">{{$partner->name}}</td>
                         <td class="active">{{$partner->email}}</td>
                         <td class="active">{{$partner->phone}}</td>
                         <td class="active"><input type="checkbox" name="partner_id[]" value="{{$partner->id}}"></td>
                     </tr>
                  @endforeach
             </table>
             <button class="btn btn-info" id="select_users" type="submit">Вибрати</button>
         </form>
        </div>
    </ul>
</div>

@endsection