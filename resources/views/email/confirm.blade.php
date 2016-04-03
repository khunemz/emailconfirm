@extends('layout.master')
@section('content')
    <div class="panel panel-info">
        <div class="panel-body">
            {!! Form::model('confirmation_code', [
                'class' => 'form-group',
                'method' => 'post',
                'route' => ['email.store']
            ]) !!}
                <div class="form-inline">
                    {!! Form::text('confirmation_code',null, [
                        'class' => 'form-control',
                        'placeholder' => 'Confirmation code'
                    ]) !!}
                    {!! Form::submit('Submit', [
                        'class' => 'btn btn-success'
                    ]) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection