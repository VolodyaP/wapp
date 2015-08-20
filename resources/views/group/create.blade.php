@extends('app')

@section('content')

<div class="content page1"><div class="ic"></div>
  <div class="container_12">
    <div class="grid_10">
        @include('errors.auth')
            <form method="POST" action="{{url('group')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="name">Імя Групи</label>
                <input type="text" name='name' class="form-control custom-front-input" id="name">
              </div>
              <button type="submit" class="btn btn-info">Створити</button>
            </form>
        </div>
    </div>
</div>
@endsection