<!-- resources/views/auth/login.blade.php -->

@extends('layouts.master')

@section('styles')
    @parent
    <!-- Custom styles for this login template -->
    <link href="/css/signin.css" rel="stylesheet">    
@endsection

@section('content')

	{!! Form::open(array('url' => '/auth/login', 'id' => 'user-form', 'class' => 'form')) !!}
		<div class="form-group">
			{!! Form::label('email', 'Email', array('class' => '')) !!}
			{!! Form::email('email', '', [ 'class' => 'form-control', 'id' => 'userInputId', 'placeholder' => 'Enter email' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Password', array('class' => '')) !!}
			{!! Form::password('password', [ 'class' => 'form-control', 'id' => 'userInputName', 'placeholder' => 'Enter password' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Login', [ 'class' => 'user-button btn btn-sm btn-default' ]) !!}
		</div>
		<div class="form-group">
			<a href="/auth/register"><h3>Register here..</h3></a>
		</div>
			
		{{-- Add extra controls to this form, according to required actions, they will be inserted in div '.form-controls' --}}
		@section('form-controls')
			{!! Form::button('Delete',  [ 'class' => 'user-button btn btn-sm btn-danger' ]) !!}
		@endsection
	
	{!! Form::close() !!}

@endsection
