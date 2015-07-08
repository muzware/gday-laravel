<!-- resources/views/user/edit.blade.php -->

@extends('layouts.form')

@section('title', $title)

{{-- Define the content of the form here, will be place in div '.form-content' --}}
@section('form-content')
<?php 
	 echo Form::model($user, array('method' => 'put', 'route' => array('user.update', $user->id))); 
	//echo Form::open(array('action' => array('UserController@postEdit', $user->id))); 
?>
	
		<div class="form-group">
		<?php 
			echo Form::label('name', 'Name');
			echo Form::text('name', $user->name, array('class' => 'form-control', 'placeholder' => 'Name'));
		?>
		</div>
		
		<div class="form-group">	
		<?php 
			echo Form::label('email', 'Email');
			echo Form::email('email', $user->email, [ 'class' => 'form-control', 'placeholder' => 'Email' ]);
		?>
		</div>
	
		<div class="form-group">
		<?php 
			echo Form::label('created_at', 'Created');
			echo Form::label('created_at', $user->created_at, [ 'class' => 'form-control', 'placeholder' => 'Created At' ]);
		?>
		</div>
		
		<div class="form-group">
		<?php 
			echo Form::label('updated_at', 'Updated');
		    echo Form::label('updated_at', $user->updated_at, [ 'class' => 'form-control', 'placeholder' => 'Updated At' ]);
		?>
		</div>
	
	
	<?php Form::close(); ?>
	
@endsection

{{-- Add extra controls to this form, according to required actions, they will be inserted in div '.form-controls' --}}
@section('form-controls')
<?php 
	echo Form::submit('Save', array( 'class' => 'user-button btn btn-sm btn-success' ));
	echo Form::submit('Delete',  array( 'class' => 'user-button btn btn-sm btn-danger' ));
?>
@endsection


{{-- Add template specific script initialisation here --}}
@section('inline-scripts')    

	<script type="text/javascript">
		$(document).ready(function() {
			blog.initUserControls();
		});
	</script>
	
@endsection
    