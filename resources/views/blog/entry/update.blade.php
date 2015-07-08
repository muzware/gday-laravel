<!-- resources/views/entry/update.blade.php -->

@extends('layouts.master')

@section('title', $title)

{{-- Define the content of the form here, will be place in div '.form-content' --}}
@section('content')	

	<div class="profile-heading">
		<h1>{{ $title }}</h1>
		<h2>{{ $entry->title }}</h2>	
		<h3>{{ $entry->body }}</h3>	
	</div>

	
@endsection

{{-- Add template specific script initialisation here --}}
@section('inline-scripts')    

	<script type="text/javascript">
		$(document).ready(function() {
			blog.initEntryControls();
		});
	</script>
	
@endsection
    