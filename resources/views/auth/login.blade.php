@extends('layouts.app')

@section('content')
    <div class="registration">
        <slide-show :controls="false" :progress="false" :loop="true" :shuffle="true"
                    :auto-slide="7500" :auto-slide-stoppable="false">
            <section data-background-image="{{ asset("storage/slideshow/pic5.jpg") }}"></section>
            <section data-background-image="{{ asset("storage/slideshow/pic6.jpg") }}"></section>
            <section data-background-image="{{ asset("storage/slideshow/pic7.jpg") }}"></section>
            <section data-background-image="{{ asset("storage/slideshow/pic8.jpg") }}"></section>
        </slide-show>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <h2>Login</h2>

            <label for="email">{{ __('E-Mail Address') }}:</label>
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                   value="{{ old('email') }}" required autofocus
                   autocomplete="email" placeholder="Email">
            @error('email')
            <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="password">{{ __('Password') }}:</label>
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"
                   required autocomplete="current-password" placeholder="Password">
            @error('password')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <checkbox name="remember" id="remember" :state="{{ old('remember') ? "true" : "false" }}">
                {{ __('Remember Me') }}
            </checkbox>

            <input type="submit" value="{{ __('Login') }}">
            <span class="login-ref"><a href="{{ route('password.request') }}">Forgot your password?</a></span>
            <span class="login-ref">Not registered yet? <a href="{{ route("register") }}">Register now!</a></span>
        </form>
    </div>
@endsection
