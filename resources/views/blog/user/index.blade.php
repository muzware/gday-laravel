<!-- resources/views/user/index.blade.php -->

@extends('layouts.index')

@section('title', $title)

{{-- Display a User list for administration purposes --}}
@section('index-content')    

	<h3>Registered Users ({{count($users)}})</h3>    	    
	<div class="blog-user-list">
	    @forelse ($users as $user)
	    	<div class="blog-user-item container">
	    		<div class="row">
					<?php  echo Form::model($user, array('method' => 'delete', 'route' => array('user.destroy', $user->id))); ?> 
					
				
					<div class="form-group">
						{!! Form::label('name', $user->name, array('class' => '')) !!}
						{!! Form::label('email', $user->email, array('class' => '')) !!}
					</div>
				
					<div class="form-group">
					    {!! Form::label('updated_at', 'Updated at: '.$user->updated_at)!!}
					</div>
	
					<div class="form-group">
					<?php 
						echo Form::submit('Delete', array('class' => 'user-button btn btn-sm btn-danger'));
					?>
					</div>
								
					{!! Form::close() !!}
				</div>
	    	
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
    