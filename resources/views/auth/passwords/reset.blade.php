@extends('layouts.app')

@section('content')
    <div class="h-screen flex flex-col">
        <nav-bar :urls="{{ generateNavigationLink() }}"></nav-bar>
        <main>
            <section>
                <form class="default-form" method="post" action="{{ route('password.update') }}">
                    @csrf
                    <h2>{{ __('Reset Password') }}</h2>
                    <input type="hidden" name="token" value="{{ $token }}">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                           value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                           placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <label for="password" class="">{{ __('Password') }}</label>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror"
                           name="password" required autocomplete="new-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" name="password_confirmation"
                           required autocomplete="new-password" placeholder="Confirm password">

                    <input type="submit"
                           class="bg-transparent border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-gray-100"
                           value="{{ __('Reset Password') }}">
                </form>
            </section>
        </main>
        <v-footer class="mt-auto" :urls="{{ generateNavigationLink() }}"></v-footer>
    </div>
@endsection
