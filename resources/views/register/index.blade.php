@extends('layout.master')
@section('content')

@if($errors->all())
    @foreach($errors->all() as $error)
        <ul>
            <li>{{ $error }}</li>
        </ul>
    @endforeach
@endif
<div class="panel panel-primary">
    <div class="panel-body">
        {!! Form::model('register', [
            'method' => 'post',
            'route' => ['register.store']
           ]) !!}

        <div class="form-group">
            {!! Form::text('name', null, [
                'class' => 'form-control',
                'placeholder' => 'Name ...'
            ]) !!}
        </div>

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

        <div class="form-group">
            {!! Form::password('password_confirmation', [
                'class' => 'form-control',
                'placeholder' => 'Confirm password ...'
            ]) !!}
        </div>


        <div class="form-inline">
            <span> Agree term and use</span>
            {!! Form::checkbox('isAgree' , true ,[
                'class' => 'checkbox'
            ]) !!}
        </div>


        {!! Form::submit('Register', [
            'class' => 'btn btn-success'
        ]) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection