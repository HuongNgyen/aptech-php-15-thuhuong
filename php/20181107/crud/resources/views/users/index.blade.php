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
            <div class= "d-flex ml-3 justify-content-around align-items-center">
            <form action="/create"  method="get" >
            {{csrf_field()}}
            <input type="hidden" value="get" name="_method">
            <button type='submit' class='btn btn-info text-uppercase col-12'>create new an user</button></form>
            <h1 class="text-centertext-uppercase col-6">users list</h1>
            </div>
            <table class="table table-hover mt-3 table-bordered">
            <thead>
            <tr class="text-center">
      <th scope="col">Id</th>
      <th scope="col" >Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Active</th>
    </tr>
            </thead>
            <tbody class="text-center">
            @foreach ($users as $user)
            <tr>
            <td style="width:10%">{{$user->Id}}</td>
            <td style="width:20%">{{$user->Name}}</td>
            <td style="width:20%">{{$user->Email}}</td>
            <td style="width:20%">{{$user->Password}}</td>
            <td class="d-flex justify-content-between">
            <form action="/users/{{$user->Id}}" method="get">
            {{csrf_field()}}
      <input type="hidden" value="get" name="_method">
      <button type='submit' class='btn btn-success'>Show</button></form>
      <form action="{{ route('users.edit',$user->Id) }}" method="get">
      {{csrf_field()}}
      <input type="hidden" value="get" name="_method">
      <button type='submit' class='btn btn-warning'>Edit</button>
      </form>
      <form action="{{ route('users.destroy',$user->Id) }}" method="POST">
      {{csrf_field()}}
      <input type="hidden" value="DELETE" name="_method">
      <button type='submit' class='btn btn-danger'>Delete</button></form>
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