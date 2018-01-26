@extends('layout.app')

@section('title', 'contact page')

@section('content')
    <h1>Contact</h1>

    {!! Form::open(['url' => 'contact', 'method' => 'post']) !!}

        <div class="form-group">
            {{ Form::label('name', 'Enter your name') }}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'enter your name']) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'E-Mail Address') }}
            {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'enter your email']) }}
        </div>

        <div class="form-group">
            {{ Form::label('message', 'Your message') }}
            {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'enter your message']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Click Me!') , ['class' => 'btn btn-primary']}}
        </div>

    {!! Form::close() !!}
@endsection