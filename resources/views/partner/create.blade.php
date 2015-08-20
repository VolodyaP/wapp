@extends('app')

@section('content')

<div class="content page1"><div class="ic"></div>
  <div class="container_12">
    <div class="grid_10">
        @include('errors.auth')

        <form method="POST" action="{{url('partner')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">Імя:</label>
                <div>
                    <input type="text" class="form-control custom-front-input" name="name" id="name">
                </div>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <div>
                <input type="email" class="form-control custom-front-input" name="email" id="email">
              </div>
            </div>
            <div class="form-group">
                <label for="phone">Телефон:</label>
                <div>
                    <input type="text" class="form-control custom-front-input" name="phone" id="phone">
                </div>
            </div>
            <div class="form-group">
            <label for="type">Тип:</label>
                <div>
                    <select class="form-control custom-front-input" name="type" id="type">
                        @foreach($partners_type as $type)
                             <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
          <button type="submit" class="btn btn-info">Створити</button>
        </form>
    </div>
</div>
</div>
@endsection