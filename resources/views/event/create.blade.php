@extends('app')

@section('content')

<div class="content page1"><div class="ic"></div>
  <div class="container_12">
    <div class="grid_10">
        @include('errors.auth')
            <form method="POST" action="{{url('event')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="date">Дата</label>
                    <div>
                        <input type="date" name='date' class="form-control custom-front-input" id="date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="male_name">Наречений</label>
                    <div>
                        <input type="text" name='male_name' class="form-control custom-front-input" id="male_name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="female_name">Наречена</label>
                    <div>
                        <input type="text" name='female_name' class="form-control custom-front-input" id="female_name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="guests_count">Кількість Гостей</label>
                    <div>
                        <input type="number" name='guests_count' class="form-control custom-front-input" id="guests_count">
                    </div>
                </div>
                <div class="form-group">
                    <label for="place">Місце Проведення</label>
                    <div>
                        <input type="text" name='place' class="form-control custom-front-input" id="place">
                    </div>
                </div>
              <button type="submit" class="btn btn-info">Створити</button>
            </form>
        </div>
    </div>
</div>

@endsection