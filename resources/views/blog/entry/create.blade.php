<!-- resources/views/entry/create.blade.php -->

@extends('layouts.form')

@section('title', $title)

@section('form-content')
	<?php 
		echo Form::model($entry, array('method' => 'post', 'route' => array('entry.store')));	
	?>

	<div class="form-group">
	<?php	echo Form::label('title', 'Title');
	    	echo Form::text('title', null, [ 'placeholder' => 'Insert Title here...', 'class' => 'form-control' ]) 
	?>
	</div>

	<div class="form-group">
	<?php	echo Form::label('body', 'Body');
	    	echo Form::text('body', null, [ 'placeholder' => 'Insert your thoughts here...', 'class' => 'form-control' ]) 
	?>
	</div>
	  
	<?php 
		echo Form::submit('Save', array( 'class' => 'user-button btn btn-sm btn-success' ));
		echo Form::close();
	?>

@endsection

@section('form-controls')
{{-- not playing niceley with Form:: --}}
@endsection


{{-- Add form specific script initialisation here --}}
@section('inline-scripts')    
	<script type="text/javascript">
		$(document).ready(function() {
			blog.initEntryControls();
		});
	</script>
@endsection
