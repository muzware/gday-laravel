<!-- resources/views/comment/form.blade.php -->

@extends('layouts.form')

@section('title', $title)

{{-- Define the content of the form here, will be place in div '.form-content' --}}
@section('form-content')

	{!! Form::open(array('url' => '/comments/edit/'.$comment->id, 'id' => 'comment-form', 'class' => 'blog-form')) !!}

	  <div class="form-group">
	    <label for="commentInputId">Name</label>
	    {!! Form::label('user_id', $comment->user_id, [ 'class' => 'form-control', 'id' => 'commentInputId', 'placeholder' => 'ID' ]) !!}
	  </div>

	  <div class="form-group">
	    <label for="commentInputTitle">Title</label>
	    {!! Form::text('title', $comment->title, [ 'class' => 'form-control', 'id' => 'commentInputTitle', 'placeholder' => 'Insert Title here...' ]) !!}
	  </div>

	  <div class="form-group">
	    <label for="commentInputBody">Body</label>
	    {!! Form::text('body', $comment->body, [ 'class' => 'form-control', 'id' => 'commentInputBody', 'placeholder' => 'Insert your comments here...' ]) !!}
	  </div>

	{!! Form::close() !!}

@endsection


{{-- Add extra controls to this form, according to required actions, they will be inserted in div '.form-controls' --}}
@section('form-controls')
    <button type="submit" class="user-button btn btn-sm btn-success">Save</button>
	<a href="/comments/delete/{{ $comment->id }}" id="comment-button-delete" class="comment-button btn btn-sm btn-danger">Delete</a>			
@endsection	


{{-- Add template specific script initialisation here --}}
@section('inline-scripts')    
	<script type="text/javascript">
		$(document).ready(function() {
			blog.initCommentControls();
		});
	</script>
@endsection
    

    