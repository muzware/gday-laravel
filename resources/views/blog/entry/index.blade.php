<!-- resources/views/entry/index.blade.php -->

@extends('layouts.master')

@section('title', $title)

@section('content')    

	<h3>There are {{count($entries)}} entries!</h3>    	    
	<?php echo link_to_route('entry.create', $title = 'Create New Entry', array(), array('class' => 'entry-button btn btn-lg btn-default')); ?>
	<div class="blog-entry-list">
	
	    @forelse ($entries as $entry)
	    	
	    	<div class="blog-entry-item container">
	    		<div class="row">
					<div class="col-md-1">
		    			{{ $entry->id }}
					</div>
					<div class="col-md-5">
						{{ $entry->title }}	
					</div>
					<div class="col-md-4">
						{{ $entry->updated_at }}
					</div>
					<div class="col-md-2">
						<span class="badge">TODO Comments</span>
					</div>
				</div>
	    		<div class="row">
					{{ $entry->body }}
	    		</div>
	    		<div class="row">
					<?php
						// Create a form containing the action links
						echo Form::model($entry, array('method' => 'delete', 'route' => array('entry.destroy', $entry->id)));
						echo link_to_route('entry.edit', $title = 'Edit', array('id' => $entry->id), array('class' => 'entry-button btn btn-sm btn-success'));
						echo Form::submit('Destroy', array( 'class' => 'entry-button btn btn-sm btn-danger' ));
						echo Form::close();
					?>
	    		</div>
			</div>
			
		@empty
		
			<p>No entries yet.</p>
			
		@endforelse
	</div>
    
    
    
@endsection

@section('inline-scripts')
    
    <!-- Public Inline Script to Initialise public.js -->
	<script type="text/javascript">
		$(document).ready(function() {
			blog.initEntryControls();
		});
	</script>
	
@endsection
    