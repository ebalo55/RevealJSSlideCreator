@extends('layouts.app')

@section('content')
<div class="h-screen flex flex-col">
    <nav-bar :urls="{{ generateNavigationLink() }}"></nav-bar>
    <form class="default-form" method="POST" action="{{ route('verification.resend') }}">
        <h2>{{ __('Verify Your Email Address') }}</h2>
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif

        <p class="text-center my-3 text-lg">
            {{ __('Before proceeding, please check your email for a verification link.') }}<br>
            {{ __('If you did not receive the email click the button below to request another.') }}
        </p>

        @csrf
        <button type="submit" class="border border-blue-500 text-blue-700 hover:bg-blue-500 hover:text-gray-100">
            {{ __('Click here to request another') }}
        </button>
    </form>
    <v-footer class="mt-auto" :urls="{{ generateNavigationLink() }}"></v-footer>
</div>
@endsection
