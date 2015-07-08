<!-- resources/views/user/form.blade.php -->

@extends('layouts.master')

@section('title', 'User updated')

{{-- Define the content of the form here, will be place in div '.form-content' --}}
@section('content')	

	<div class="profile-heading">
		<h1>Saved changes to: {{ $user->name }}</h1>	
		<h3>{{ $user->email }}</h3>	
	</div>

	
@endsection

{{-- Add template specific script initialisation here --}}
@section('inline-scripts')    

	<script type="text/javascript">
		$(document).ready(function() {
			blog.initUserControls();
		});
	</script>
	
@endsection
    