<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="banhang/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid Bg-main  h-100">
        <div class="row h-100">
            <div class="col-6 offset-3 d-flex justify-content-center align-items-center flex-column Border-form">
                <h1 class="text-uppercase mt-5 text-white"><font face="Comic sans MS" size="10">sign in </font></h1>
                <form class=" d-flex flex-column">
                        <div class="form-group Input_pom-agile">
                    
                         <span class="icon1 "> <i class="fa fa-user" aria-hidden="true"></i></span>
                         <input type="email" class="form-control user" aria-describedby="emailHelp" placeholder="Enter email"
                          required="">
                          
                        </div>
                        <div class="form-group Input_pom-agile">
                          
                            <span class="icon2"><i class="fas fa-lock-open"></i></span>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                
                        </div>
                        <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-pink">Sign in</button>
                        </div>
                      </form>
            </div>
        </div>
    </div>
</body>
</html>