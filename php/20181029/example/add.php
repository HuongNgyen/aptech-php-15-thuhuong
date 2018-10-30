<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container h-100">
        <div class="row h-100 w-100">
            <div class="col-12 w-100 h-100 d-flex flex-column align-items-center justify-content-center ">
            <h1 class="mt-5">Them Nguoi dung</h1>

            <form class="mt-3" action="7-themnguoidung.php" method="post">
            <div class="form-group">
            <label class="h5">UserName:</label>
            <input type="text" name ="name"class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group">
            <label class="h5">Email:</label>
            <input type="text" name ="email"class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
            <label class="h5">Password:</label>
            <input type="password" name ="password"class="form-control" placeholder="Enter password">
            </div>
               <button  type = "submit" name = "submit" class="btn w-100  btn-primary btn-lg">Register</button>
            </form>
            
            </div>
        </div>
    </div>
</body>
</html>