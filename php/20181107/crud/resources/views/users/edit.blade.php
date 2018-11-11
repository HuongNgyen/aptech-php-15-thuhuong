<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1 class="text-center text-uppercase">edit form</h1>
            <form action="{{ route('users.update',$users->Id) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
    <label >Name </label>
    <input type="text" class="form-control" placeholder="Enter name" Name="name">
  </div>
     <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control"aria-describedby="emailHelp" placeholder="Enter email" Name="email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Password" Name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
    </div>
</body>
</html>