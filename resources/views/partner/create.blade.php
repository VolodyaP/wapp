@extends('app')

@section('content')

<div class="row">
    @include('admin.sidebar')

    <div class="col-lg-8">
        <form method="post" action="{{url('partner')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
            <label for="name">Імя:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Імя">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="phone">Телефон:</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Телефон">
            </div>
            <div class="form-group">
                <select class="form-control" name="type">
                    @foreach($partners_type as $type)
                         <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
          <div class="form-group">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
@endsection