<!DOCTYPE html>
<html>
<head>
	<title>sdetals</title>
	
</head>
<body>
	
	
		  	<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Id</th>
		      <th scope="col">Name</th>
		      <th scope="col">Phone</th>
		      <th scope="col">Email</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($data as $x)
		    <tr>
		      <td>{{$x->sl}}</td>
		      <td>{{$x->name}}</td>
		      <td>{{$x->phone}}</td>
		      <td>{{$x->email}}</td>
		      <td><button  class="btn-danger" data-id="{{$x->sl}}" id="btndelete">delete</button></td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	
</body>
</html>
