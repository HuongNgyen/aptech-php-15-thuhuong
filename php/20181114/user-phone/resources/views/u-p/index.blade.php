<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
<a href="./index"><button class="btn btn-outline-dark"><i class="fas fa-home"></i></button></a>
</div>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div><h1 class="text-center">List Customer</h1></div>
            <div class="d-flex justify-content-around align-items-center">
            <form action="{{route('users.index')}}">
            <button class="btn btn-outline-primary mb-3">List Users</button>
            </form>
            <form action="{{route('phones.index')}}">
            <button class="btn btn-outline-warning mb-3">List NumberPhone</button>
            </form>
            </div>
            <table class="table table-hover table-bordered text-center">
        <thead class="bg-danger">
            <tr>
                <th> Number </th>
                <th> User_id </th>
                <th> Name </th>
            </tr>
        </thead>
        <tbody>
                @foreach($phones as $phone)
                    <tr>
                        <td> {{$phone['number']}} </td>
                        <td> {{$phone['user_id']}} </td>
                        <td> {{$phone['user']['name']}} </td>
                        
                    </tr>
                @endforeach
          
        </tbody>
    </table>
            </div>
        </div>
    </div>
</body>
</html>