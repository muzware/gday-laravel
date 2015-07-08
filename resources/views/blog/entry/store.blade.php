<!-- resources/views/entry/form.blade.php -->

@extends('layouts.master')

@section('title', $title)

@section('content')	

	<div class="entry-heading">
		<h1>{{ $title }}</h1>
		<h2>{{ $entry->title }}</h2>	
		<h3>{{ $entry->body }}</h3>	
	</div>
	{{-- TODO add create another entry button --}}

	
@endsection

@section('inline-scripts')    
	<script type="text/javascript">
		$(document).ready(function() {
			blog.initEntryControls();
		});
	</script>
{{-- Add template specific script initialisation here --}}
@endsection
    