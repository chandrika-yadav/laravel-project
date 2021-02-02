@extends('Layouts.index')
{{--this is child directory which inherits index blade--}} 

@section('title','Show User')
{{--here we make title dynamic according to page --}}
{{--here we inject some content into layouts using section directive--}}

@section('content')
{{--we are define section to inject it in layout--}}

<div class="container">
<br>
<br>

<h2 class="text-center">User Details</h2>
	<div class="table-responsive-sm">
	  <table class="table table-striped">
		<thead class="thead-light">
			<tr>
				<th>User Name</th>
				<th>Password</th>
				<th>Email</th>
				<th>Address</th>
				<th>Phone</th>
			</tr>
			{{--here data is key which we pass from usercontroller so name must be same--}}
			@foreach($data as $row)
				
			<tr>
				<td>{{$row['name']}}</td>
				<td>{{$row['password']}}</td>
				<td>{{$row['email']}}</td>
				<td>{{$row['address']}}</td>
				<td>{{$row['phone']}}</td>
			</tr>
			
			@endforeach
			
		</thead>
	  </table>
	</div>
</div>

@endsection