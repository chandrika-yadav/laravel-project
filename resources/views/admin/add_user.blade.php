@extends('Layouts.index')

@section('title','Add User')

@section('content')
<div class="container">
  <h2>Form Validation</h2>
  <p>In this example, we use <code>.was-validated</code> to indicate what's missing before submitting the form:</p>
{{-- @include('components.userform')this is comment section--}}
  <x-userform/>
</div>

@endsection