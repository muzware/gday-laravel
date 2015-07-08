<!-- resources/views/comment/form.blade.php -->

@extends('layouts.master')

@section('title', 'Comment updated')

{{-- Define the content of the form here, will be place in div '.form-content' --}}
@section('content')	

	<div class="profile-heading">
		<h1>Saved changes to:</h1>	
		<h3>{{ $comment->body }}</h3>	
	</div>

	
@endsection

{{-- Add template specific script initialisation here --}}
@section('inline-scripts')    

	<script type="text/javascript">
		$(document).ready(function() {
			blog.initCommentControls();
		});
	</script>
	
@endsection
    