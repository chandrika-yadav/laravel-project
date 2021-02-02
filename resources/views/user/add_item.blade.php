@extends("Layouts.index")

@section("title","Add Item")

@section('content')
<div class="container">
@if(session('message'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ session('message') }}</strong>
</div>
@endif
<form action="{{route('store.item')}}" class="was-validated" method="post" 
enctype="multipart/formdata">
  @csrf
      {{--use input component--}}
    <x-uikit.input label="Itemname" name="Itemname" id="Itemname" 
    placeholder="Enter Itemname" />
      
    <x-uikit.input type="number" label="Quantity" name="Quantity" id="Quantity"
    placeholder="Enter Quantity" />

    <x-uikit.input label="Price" name="Price" id="Price" 
    placeholder="Enter Price" />

    <div class="form-group">
      <label for="Description">Description:</label>
      <textarea class="form-control" name="Description">
      </textarea>
      @error('Description')
      <div class="text-danger">{{$message}}</div> 
      @enderror
    </div> 
    
    <x-uikit.input type="file" label="Image" name="Image" id="Image" />
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection