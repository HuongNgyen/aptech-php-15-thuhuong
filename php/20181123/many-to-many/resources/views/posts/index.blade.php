<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
<a href="./index"><button class="btn btn-outline-dark"><i class="fas fa-home"></i></button></a>
</div>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="text-center mt-3">
            <h1>Posts Demo</h1>
            </div>
            <div class="d-flex justify-content-around align-items-center">
            <form action="">
            <button class='btn btn-outline-secondary  mb-3'> Create an user </button></form>
            <form action="">
            <button class="btn btn-outline-danger mb-3">List PhoneNumber</button>
            </form>
            <form action="">
            <button class="btn btn-outline-warning mb-3">List Custom</button>
            </form>
            </div>
            <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Title </th>
                <th>Category_id</th>
                <th> Name </th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
                    <tr>
                        <td> {{$post->id}} </td>
                        <td> {{$post->title}} </td>
                        <td> 
                        @foreach($post->categories as $category)
                        {{$category->id}}
                        @endforeach
                         </td>
                        <td> 
                        @foreach($post->categories as $category)
                        {{$category->name}}
                        @endforeach
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