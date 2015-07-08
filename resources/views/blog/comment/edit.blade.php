<!-- resources/views/comment/edit.blade.php -->

@extends('layouts.form')

@section('title', $title)

{{-- Define the content of the form here, will be place in div '.form-content' --}}
@section('form-content')
<?php 
	 echo Form::model($comment, array('method' => 'delete', 'route' => array('comment.update', $comment->id))); 
	//echo Form::open(array('action' => array('CommentController@postEdit', $comment->id))); 
?>
	
		<div class="form-group">
		<?php 
			echo Form::label('body', 'Body');
			echo Form::text('body', $comment->body, array('class' => 'form-control', 'placeholder' => 'Body'));
		?>
		</div>
		
		<div class="form-group">
		<?php 
			echo Form::label('created_at', 'Created');
			echo Form::label('created_at', $comment->created_at, [ 'class' => 'form-control', 'placeholder' => 'Created At' ]);
		?>
		</div>
		
		<div class="form-group">
		<?php 
			echo Form::label('updated_at', 'Updated');
		    echo Form::label('updated_at', $comment->updated_at, [ 'class' => 'form-control', 'placeholder' => 'Updated At' ]);
		?>
		</div>
		
		<div class="form-group">
		<?php 
			echo Form::submit('Save', array( 'class' => 'comment-button btn btn-sm btn-success' ));
			echo Form::submit('Delete',  array( 'class' => 'comment-button btn btn-sm btn-danger' ));
		?>
		</div>
	
	<?php Form::close(); ?>
	
@endsection

{{-- Add extra controls to this form, according to required actions, they will be inserted in div '.form-controls' --}}
@section('form-controls')
<?php 
?>
@endsection


{{-- Add template specific script initialisation here --}}
@section('inline-scripts')    

	<script type="text/javascript">
		$(document).ready(function() {
			blog.initCommentControls();
		});
	</script>
	
@endsection
    