<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="addcategorypost" method="post">
  @csrf
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" nama="category_name"  id="inputEmail3">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</body>
</html>