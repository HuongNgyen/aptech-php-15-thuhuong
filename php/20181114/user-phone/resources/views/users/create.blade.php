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
<div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="{{route('users.store')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="POST" />
                    Name: <input type="text" id="name" placeholder="Name" name="name">
                    <button type="submit"> CREATE
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>