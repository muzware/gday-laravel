<!-- resources/views/comment/destroy.blade.php -->

@extends('layouts.master')

@section('title', $title)

{{-- Define the content of the form here, will be place in div '.form-content' --}}
@section('content')	

	<div class="profile-heading">
		<h1>Deleted comment: {{ $comment->body }}</h1>	
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
    