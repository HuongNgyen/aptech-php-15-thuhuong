<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <form action="{{route('posts.index')}}">
            <button class="btn btn-outline-secondary"><i class="fas fa-home"></i></button>
            </form>
            <h1 class="text-center mt-5 ">Edit Form</h1>
            <form action="{{route('posts.update',$post->id)}}" method="POST">
            {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT" />
  
  <div class="form-group">
    <label >Title</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title" name="title" value="{{$post->title}}">
  </div>
  <div class="form-group">
    <label >Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="description" value="{{$post->description}}">
  </div>
  <div class="form-group">
    <label >Content</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Content" name="content" value="{{$post->content}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Category_id</label>
    <input type="integer" class="form-control" id="exampleInputPassword1" placeholder="Category_id" name="category_id" value = "{{$post->category_id}}">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
            </div>
        </div>
    </div>
</body>
</html>