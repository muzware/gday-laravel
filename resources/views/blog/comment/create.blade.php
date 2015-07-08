<!-- resources/views/comment/create.blade.php -->

@extends('layouts.form')

@section('title', $title)

@section('form-content')
	<?php 
		echo Form::model($comment, array('route' => array('comment.create')));	
	?>

	<div class="form-group">
	<?php	echo Form::text('body', $comment->body, [ 'placeholder' => 'Insert your thoughts here...', 'class' => 'form-control' ])	?>
	</div>
	  
	<?php 
		echo Form::submit('Save', array( 'class' => 'user-button btn btn-sm btn-success' ));
		echo Form::close();
	?>

@endsection


{{-- Add form specific script initialisation in here --}}

@section('inline-scripts')    
	<script type="text/javascript">
		$(document).ready(function() {
			blog.initCommentControls();
		});
	</script>
@endsection
