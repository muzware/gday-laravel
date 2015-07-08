<!-- resources/views/comment/index.blade.php -->

@extends('layouts.index')

@section('title', $title)

@section('index-content')    

	<h3>{{ count($comments)}} Comments</h3>    	    
	<div class="blog-comment-list">
	    @forelse ($comments as $comment)
	    	<div class="blog-comment-item container">
	    		<div class="row">
					<div class="col-md-1">
		    			{{ $comment->id }}
					</div>
					<div class="col-md-7">
						{{ $comment->body }}
					</div>
					<div class="col-md-2">
						{{ $comment->updated_at }}
					</div>
					<div class="col-md-2">
					<?php
						// Create a form containing the action links
						echo Form::model($comment, array('method' => 'delete', 'route' => array('comment.destroy', $comment->id)));
						echo link_to_route('comment.edit', $title = 'Edit', array('id' => $comment->id), array('class' => 'comment-button btn btn-sm btn-success'));
						echo Form::submit('Destroy', array( 'class' => 'comment-button btn btn-sm btn-danger' ));
						echo Form::close();
					?>
					</div>
				</div>
			</div>
		@empty
			<p>No comments yet.</p>
		@endforelse
	</div>    
    
@endsection

{{-- When the document is ready, initialise blog comment controls --}}
@section('inline-scripts')
    
	<script type="text/javascript">
		$(document).ready(function() {
			blog.initCommentControls();
		});
	</script>
	
@endsection
    