<!-- resources/views/layouts/form.blade.php -->

@extends('layouts.master')

{{-- Define the template for all Blog forms --}}
@section('content')

<div class="blog-form">

<div class="form-title">
<h1>{{ $title }}</h1>
</div>
<div class="form-content">
@yield('form-content')
</div>
<div class="form-controls">
<button type="submit" class="user-button btn btn-sm btn-warning">Cancel</button>

@yield('form-controls')
</div>
</div>

@endsection
