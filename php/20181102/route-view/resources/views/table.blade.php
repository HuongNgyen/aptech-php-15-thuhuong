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
    <table class="table">
    <thead>
    <tr class="bg-primary">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Active</th>
    </tr>
    </thead>
    <tbody>
    
    <?php
    foreach($users as $user){
       
      echo "
      <tr>
       <td scope='row'>$user->Id </td>
       <td>$user->Name</td>
       <td>
      <button type='button' class='btn btn-success' onclick='window.location.href = ' add.blade.php';'>Insert</button>
      <button type='button' class='btn btn-warning'>Update</button>
      <button type='button' class='btn btn-danger'>Delete</button>
      </td>
      </tr>";
    }
   
    ?>
  </tbody>
    </table>
    </div>
    </div>
</div>
</body>
</html>