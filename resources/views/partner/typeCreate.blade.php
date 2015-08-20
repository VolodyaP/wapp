@extends('app')

@section('content')

<div class="content page1"><div class="ic"></div>
  <div class="container_12">
    <div class="grid_10">
        @include('errors.auth')
        <form method="POST" action="{{url('partner/type/store')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label for="type">Тип Партнера</label>
            <input type="text" class="form-control custom-front-input" name="type" id="type" placeholder="Тип">
          </div>
          <div class="form-group">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
  </div>
</div>
@endsection