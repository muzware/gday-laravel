<!-- resources/views/layouts/index.blade.php -->

@extends('layouts.master')

{{-- Define the template for all Index forms --}}
@section('content')

<div class="blog-index">
	
	<div class="index-title">
		<h1>{{ $title }}</h1>
	</div>
	<div class="index-content">
		@yield('index-content')
	</div>
</div>
	
@endsection


