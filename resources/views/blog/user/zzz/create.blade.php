<!-- Stored in resources/views/user/create.blade.php -->

@extends('layouts.master')

@section('title', 'Create User')

@section('content')
    <h1>TODO: Create User Form.</h1>
    
    {{ Form::input('text', 'name') }}
    {{ Form::input('email', 'email_address', null, ['class' => 'emailfld']) }}
    {{ Form::password('password') }}
    
@endsection