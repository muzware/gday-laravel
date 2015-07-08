<!-- resources/views/user/form.blade.php -->

@extends('layouts.master')

@section('title', 'User deleted')

{{-- Define the content of the form here, will be place in div '.form-content' --}}
@section('content')	

	<div class="profile-heading">
		<h1>Deleted user: {{ $user->name }}</h1>	
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
    