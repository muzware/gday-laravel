<!-- resources/views/auth/register.blade.php -->

@extends('layouts.master')

@section('styles')
    @parent
    <!-- Custom styles for this login template -->
    <link href="/css/signin.css" rel="stylesheet">    
@endsection

@section('content')

	{!! Form::open(array('url' => '/auth/register', 'id' => 'auth-form', 'class' => 'blog-form')) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name', array('class' => '')) !!}
			{!! Form::text('name', '', [ 'class' => 'form-control', 'placeholder' => 'Enter name...' ]) !!}
		</div>
		<div class="form-group">	
			{!! Form::label('email', 'Email', array('class' => '')) !!}
			{!! Form::email('email', '', [ 'class' => 'form-control', 'placeholder' => 'Enter email...' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Enter Password', array('class' => '')) !!}
			{!! Form::password('password', [ 'class' => 'form-control', 'placeholder' => 'Enter password ...' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('confirm_password', 'Confirm Password', array('class' => '')) !!}
			{!! Form::password('confirm_password', [ 'class' => 'form-control', 'placeholder' => 'Confirm password ...' ]) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Register', [ 'class' => 'user-button btn btn-sm btn-default' ]) !!}
		</div>
			
		{{-- Add extra controls to this form, according to required actions, they will be inserted in div '.form-controls' --}}
		@section('form-controls')
			{!! Form::button('Register',  [ 'class' => 'user-button btn btn-sm btn-success' ]) !!}
		@endsection
	
	{!! Form::close() !!}

@endsection
