<!-- resources/views/entry/edit.blade.php -->

@extends('layouts.form')

@section('title', $title)

{{-- Define the content of the form here, will be place in div '.form-content' --}}
@section('form-content')
<?php echo Form::model($entry, array('method' => 'put', 'route' => array('entry.update', $entry->id))); ?>
	
		<div class="form-group">
		<?php 
			echo Form::text('title', $entry->title, array('class' => 'form-control', 'placeholder' => 'Title'));
		?>
		</div>
		
		<div class="form-group">	
		<?php 
			echo Form::textarea('body', $entry->body, [ 'class' => 'form-control', 'placeholder' => 'Your thoughts here...' ]);
		?>
		</div>
	
		<div class="form-group">
		<?php 
			echo Form::label('created_at', 'Created');
			echo Form::label('created_at', $entry->created_at, [ 'class' => 'form-control', 'placeholder' => 'Created At' ]);
		?>
		</div>
		
		<div class="form-group">
		<?php 
			echo Form::label('updated_at', 'Updated');
		    echo Form::label('updated_at', $entry->updated_at, [ 'class' => 'form-control', 'placeholder' => 'Updated At' ]);
		?>
		</div>
	
		<div class="form-group">
		<?php 
			echo Form::submit('Save', array( 'class' => 'entry-button btn btn-sm btn-success' ));
			echo Form::submit('Delete',  array( 'class' => 'entry-button btn btn-sm btn-danger' ));
		?>
		</div>
			
	<?php Form::close(); ?>
	
@endsection

{{-- Add extra controls to this form, according to required actions, they will be inserted in div '.form-controls' --}}
@section('form-controls')
@endsection


{{-- Add template specific script initialisation here --}}
@section('inline-scripts')    

	<script type="text/javascript">
		$(document).ready(function() {
			blog.initEntryControls();
		});
	</script>
	
@endsection
    