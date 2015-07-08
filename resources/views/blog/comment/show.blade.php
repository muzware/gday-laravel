<!-- resources/views/comment/form.blade.php -->

@extends('layouts.master')

@section('title', $title)

{{-- Define the content of the form here, will be place in div '.form-content' --}}
@section('content')	
	<div class="profile-heading">	
		<h1>{{ $comment->name }}</h1>
		<h5>{{ $comment->email }}</h5>	
	</div>

	<div class="profile-comments">
		<h2>Comments</h2>
	    	<div class="blog-comment-item container">	    	
				<div class="row">
					<div class="col-md-3">
						{{ $comment->updated_at }}
					</div>
					<div class="col-md-8">
						{{ $comment->body }}
					</div>
				</div>
			</div>
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
    