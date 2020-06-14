@extends('layouts.app')

@section('content')
    <div class="h-screen flex flex-col">
        <nav-bar :urls="{{ generateNavigationLink() }}"></nav-bar>
        <main>
            <section>
                <form class="default-form" method="post" action="{{ route('password.email') }}">
                    @csrf
                    <h2>{{ __('Reset Password') }}</h2>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <label for="email" class="">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" required autocomplete="email" autofocus
                           placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input type="submit"
                           class="bg-transparent border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-gray-100"
                           value="{{ __('Send Password Reset Link') }}">
                </form>
            </section>
        </main>
        <v-footer class="mt-auto" :urls="{{ generateNavigationLink() }}"></v-footer>
    </div>
@endsection
