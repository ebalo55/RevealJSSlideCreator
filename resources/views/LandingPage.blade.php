@extends('layouts.app')

@section('title')
    {{ env("APP_NAME") }}
@endsection

@section('content')
    <nav-bar :urls="{{ generateNavigationLink() }}"></nav-bar>
@endsection
