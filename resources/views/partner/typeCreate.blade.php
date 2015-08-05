@extends('app')

@section('content')

<div class="row">
    @include('admin.sidebar')

    <div class="col-lg-8">
        <form method="post" action="{{url('partner/type/store')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label for="type">Тип Партнера</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="Тип">
          </div>
          <div class="form-group">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
@endsection