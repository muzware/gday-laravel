<!-- resources/views/user/index.blade.php -->

@extends('layouts.index')

@section('title', $title)

{{-- Display a list of Users for administration purposes --}}
@section('index-content')    

	<h3>Registered Users ({{count($users)}})</h3>    	    
	<div class="blog-user-list">
	    @forelse ($users as $user)
	    	<div class="blog-user-item container">
	    	
				{!! Form::open(array('id' => 'user-form', 'class' => 'form')) !!}
			
				<div class="form-group">
					{!! Form::label('name', 'Name', array('class' => '')) !!}
					{!! Form::text('name', $user->name, [ 'class' => 'form-control', 'placeholder' => 'Name' ]) !!}
				</div>
				<div class="form-group">
					{!! Form::label('email', 'Email', array('class' => '')) !!}
					{!! Form::email('email', $user->email, [ 'class' => 'form-control', 'placeholder' => 'Email' ]) !!}
				</div>
			
				<div class="form-group">
					{!! Form::label('created_at', 'Created at: '.$user->created_at, [ 'class' => 'form-control', 'placeholder' => 'Created At' ]) !!}
			
				    {!! Form::label('updated_at', 'Updated at: '.$user->updated_at, [ 'class' => 'form-control', 'placeholder' => 'Updated At' ])!!}
				</div>
			
				<div class="form-group">
				<?php 
					echo link_to_route('users.edit', $title = 'Edit User', $parameters = array(), array('class' => 'btn btn-sm btn-success'));
					echo link_to_route('users.destroy', $title = 'Delete User', $parameters = array(), array('class' => 'btn btn-sm btn-danger'));
					echo Form::submit('Save', array('class' => 'user-button btn btn-sm btn-success'));
					echo Form::button('Delete', array('class' => 'user-button btn btn-sm btn-danger'));
				?>
				</div>
							
				{!! Form::close() !!}
	    	
			</div>
		@empty
			<p>No users yet.</p>
		@endforelse
	</div>
        
@endsection


{{-- When Initialise blog user controls when document is ready --}}
@section('inline-scripts')
    
	<script type="text/javascript">
		$(document).ready(function() {
			blog.initUserControls();
		});
	</script>
	
@endsection
    