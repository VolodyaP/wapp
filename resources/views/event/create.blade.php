@extends('app')

@section('content')

<div class="row">
    @include('admin.sidebar')

    <div class="col-lg-8">
        <div class="row">
            <form class="form-inline" method="post" action="{{url('event')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name='date' class="form-control" id="date">
                <input type="text" name='male_name' class="form-control" id="male_name">
                <input type="text" name='female_name' class="form-control" id="female_name">
                <input type="number" name='guests_count' class="form-control" id="guests_count">
                <input type="text" name='place' class="form-control" id="place">
              </div>
              <button type="submit" class="btn btn-default">Створити</button>
            </form>
        </div>
    </div>
</div>
@endsection