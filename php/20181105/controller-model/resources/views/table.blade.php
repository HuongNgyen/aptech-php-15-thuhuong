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
            <table class="table table-hover table-bordered">
            <thead>
            <tr class="text-center">
      <th scope="col">Id</th>
      <th scope="col" >Name</th>
      <th scope="col">Active</th>
    </tr>
            </thead>
            <tbody class="text-center">
            @foreach ($users as $user)
            <tr>
            <td style="width:10%">{{$user->Id}}</td>
            <td style="width:60%">{{$user->Name}}</td>
            <td style="width:30% ">
      <button type='button' class='btn btn-success'>Show</button>
      <button type='button' class='btn btn-warning'>Edit</button>
      <button type='button' class='btn btn-danger'>Delete</button></td>
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>