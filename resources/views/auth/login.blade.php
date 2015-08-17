@extends('app')

@section('content')
<div class="content page1"><div class="ic"></div>
  <div class="container_12">
    <div class="grid_10">

        @include('errors.auth')

        <form method="POST" action="{{ url('/auth/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="">E-Mail Address</label>
                <div>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="">Password</label>
                <div>
                    <input type="password" class="form-control" name="password">
                </div>
            </div>

            <div class="form-group">
                <div class="">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-info">Login</button>
                </div>
            </div>

            <div class="form-group">
                            <div class="">
            <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
            </div>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
