<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<form action="{{url('add-user')}}" method="POST">
<div>
<div class="row">
<div class="col">
    <label class ="form-control" for="name">Name:</label>
    <input class ="form-control" type="text" name="name" id="name">
</div>
</div>
<br>
<div class="row">
<div class="col">
    <label class ="form-control" for="email">Email:</label>
    <input class ="form-control" type="email" name="email" id="email">
</div>
</div>
<br>
<div class="row">
<div class="col">
    <label class ="form-control" for="number">Mobile Number:</label>
    <input class ="form-control" type="text" name="number" id="number">
</div>
</div>
<br>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Add</button>
  </div>
  
</div>
</form>
</body>
</html>