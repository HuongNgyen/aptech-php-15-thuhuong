<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PhoneNumber</title>
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
            <div class="mt-3">
            <h1 class="text-center">PhoneNumber List</h1></div>
            <div  class = "mb-3 d-flex justify-content-around align-items-center">
            <form action="{{route('phones.create')}}">
            <button class="btn btn-outline-info">Create a PhoneNumber</button>
            </form>
            <form action="{{route('users.index')}}">
            <button class="btn btn-outline-secondary">List Users</button>
            </form>
            <form action="{{route('phones.index')}}">
            <button class="btn btn-outline-warning">List NumberPhone</button>
            </form>
            </div>
            <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Number </th>
                <th> User_id </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
                @foreach($phones as $phone)
                    <tr>
                        <td> {{$phone->id}} </td>
                        <td> {{$phone->number}} </td>
                        <td> {{$phone->user_id}} </td>
                        
                        <td class="d-flex flex-row justify-content-center">
                            <form action="{{route('phones.show', $phone->id)}}" method="GET">
                                <button class='btn btn-warning ml-2'> SHOW </button>
                            </form>
                            
                            <form action="{{route('phones.edit', $phone->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> EDIT </button> 
                            </form>
                            

                            <form action="{{route('phones.destroy', $phone->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type='hidden' value='DELETE' name='_method'>
                                <button type='submit' class='btn btn-danger ml-2'> DELETE </button>
                            </form>
                                
                        </td>
                    </tr>
                @endforeach
          
        </tbody>
    </table>
            </div>
        </div>
    </div>
</body>
</html>