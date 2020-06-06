@extends('layouts.app')

@section('content')
    <div class="registration">
        <slide-show :controls="false" :progress="false" :loop="true" :shuffle="true"
            :auto-slide="7500" :auto-slide-stoppable="false">
            <section data-background-image="{{ asset("storage/slideshow/pic1.jpg") }}"></section>
            <section data-background-image="{{ asset("storage/slideshow/pic2.jpg") }}"></section>
            <section data-background-image="{{ asset("storage/slideshow/pic3.jpg") }}"></section>
            <section data-background-image="{{ asset("storage/slideshow/pic4.jpg") }}"></section>
        </slide-show>
        <form method="post" action="{{ route('register') }}">
            @csrf
            <h2>Registration</h2>

            <label for="name">{{ __('Name') }}:</label>
            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name"
                   value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
            @error('name')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="email">{{ __('E-Mail Address') }}:</label>
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                   value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            @error('email')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="password">{{ __('Password') }}:</label>
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"
                   required autocomplete="new-password" placeholder="Password">
            @error('password')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="password-confirm">{{ __('Confirm Password') }}:</label>
            <input id="password-confirm" type="password" class="@error('password') is-invalid @enderror" name="password_confirmation"
                   required autocomplete="new-password" placeholder="Confirm password">
            @error('password_confirmation')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="submit" value="{{ __('Register') }}">
            <span class="login-ref">Do you have an account? <a href="{{ route("login") }}">Login here!</a></span>
        </form>
    </div>
@endsection
