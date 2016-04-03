@extends('layout.master')
@section('content')
    @if(Auth::user())
        {{ link_to('password/email', 'Reset Password') }}
        {{ link_to('logout', 'Logout') }}
    @endif
@endsection