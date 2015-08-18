@extends('app')

@section('content')
<div class="content page1"><div class="ic"></div>
  <div class="container_12">
    <div class="grid_10">

        @include('errors.auth')

        <form role="form" method="POST" action="{{ url('/auth/register') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="control-label">Імя</label>
                <div class="">
                    <input type="text" class="form-control custom-front-input" name="name" value="{{ old('name') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">E-Mail</label>
                <div class="">
                    <input type="email" class="form-control custom-front-input" name="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Пароль</label>
                <div class="">
                    <input type="password" class="form-control custom-front-input" name="password">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Підтвердіть Пароль</label>
                <div class="">
                    <input type="password" class="form-control custom-front-input" name="password_confirmation">
                </div>
            </div>

            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-info">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
