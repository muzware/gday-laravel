<!-- resources/views/layouts/destroy.blade.php -->

@extends('layouts.master')

@section('title', 'Destroy Template')

{{-- Define the content of the template, will be place in div '.content' --}}
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
    