<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang chu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
<a href="./index"><button class="btn btn-outline-dark"><i class="fas fa-home"></i></button></a>
</div>
    <h1 class="text-muted mt-5 text-center text-uppercase">welcome, my buddies!!!</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 ">
            <hr>
            <div class="d-flex justify-content-around align-items-center mt-5">
            <form action="{{route('users.index')}}">
            <button class="btn btn-outline-primary mb-3">List Users</button>
            </form>
            <form action="{{route('phones.index')}}">
            <button class="btn btn-outline-warning mb-3">List NumberPhone</button>
            </form>
            <form action="{{route('u-p.index')}}">
            <button class="btn btn-outline-success">List Customers</button>
            </form>
            </div>
            <div class="d-flex justify-content-center mt-5">
            <img src="https://images.unsplash.com/photo-1466583985723-b74122659346?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e724125680bfb53dd83858d1435ddd2c&auto=format&fit=crop&w=889&q=80" alt="">
            </div>
            </div>
        </div>
    </div>
</body>
</html>