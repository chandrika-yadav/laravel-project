@extends('Layouts.index')

@section('title','Add User')

@section('content')
<div class="container">
  <h2>Form Validation</h2>
  <p>In this example, we use <code>.was-validated</code> to indicate what's missing 
  before submitting the form:</p>
{{-- @include('components.userform')this is comment section--}}

@if(session('message'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ session('message') }}</strong>
</div>
@endif
  <x-userform/>
  {{--we make userform as a component to use it again and again--}}
</div>

@endsection