@extends('layout.master')
@section('content')
    <div class="panel panel-primary">
        <div class="panel-body">
            {!! Form::model('login', [
                'method' => 'post',
                'route' => ['login.store']
               ]) !!}
                <div class="form-group">
                    {!! Form::email('email', null, [
                        'class' => 'form-control',
                        'placeholder' => 'Email ...'
                    ]) !!}
                </div>
            <div class="form-group">
                {!! Form::password('password', [
                    'class' => 'form-control',
                    'placeholder' => 'Password ...'
                ]) !!}
            </div>

            <label>Remember me
                {!! Form::checkbox('remember', true ,[
                    'name' => 'remember',
                    'class' => 'checkbox'
                ]) !!}
            </label>

            {!! Form::submit('Log in', [
                'class' => 'btn btn-success'
            ]) !!}
            {!! Form::close() !!}
        </div>

        {{ link_to('register', 'Sign up free') }}
    </div>
@endsection
