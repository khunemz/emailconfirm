@extends('layout.master')
@section('content')
    <p>You confirmation code is {{ $confirmation_code }}</p>
    {{ link_to('email/confirm', 'Click to confirm email',[
        'class' => 'btn btn-primary'
    ]) }}
@endsection
