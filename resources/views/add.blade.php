<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
</head>
<body>
<form>
	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" id="phn">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="email">
  </div>
  
  <button type="submit" class="btn btn-primary" id="btnadd">Add</button>
</form>
</body>
</html>
