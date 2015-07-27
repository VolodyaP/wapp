@extends('app')

@section('content')

<div class="row">
    @include('admin.sidebar')

    <div class="col-lg-8">
        <div class="row">
            <form class="form-inline" method="post" action="{{url('group')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name='name' class="form-control" id="name">
              </div>
              <button type="submit" class="btn btn-default">Створити</button>
            </form>
        </div>
    </div>
</div>
@endsection