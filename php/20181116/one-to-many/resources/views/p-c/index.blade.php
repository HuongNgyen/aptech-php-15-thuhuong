<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
      <h1 class="text-uppercase text-center mt-3">list demo</h1>
      <div>
      <form action="{{route('p-c.create')}}">
      <button class="btn btn-primary mb-5">Create a post</button>
      </form>
      </div>
      <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Category_id </th>
                <th> Title </th>
                <th>Category</th>
               
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
                @foreach($posts as $post)
                    <tr >
                        <td> {{$post->id}} </td>
                        <td> {{$post->category->id}} </td>
                        <td> {{$post->title}} </td>
                        <td>{{$post->category->name}}</td>
                        
                       
                        <td class="h-100">
                        <div class="d-flex h-100 justify-content-center align-items-center">
                            <form action="{{route('p-c.show',$post->id)}}" method="GET">
                                <button class='btn btn-warning ml-2'> SHOW </button>
                            </form>
                            
                            <form action="{{route('p-c.edit',$post->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> EDIT </button> 
                            </form>
                            

                            <form action="{{route('p-c.destroy', $post->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type='hidden' value='DELETE' name='_method'>
                                <button type='submit' class='btn btn-danger ml-2'> DELETE </button>
                            </form>
                              </div>  
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
<!-- @foreach($posts as $post)
<div>
  {{$post['id']}} - {{$post['title']}} - {{$post['category']['id']}} -{{$post['category']['name']}} </div>@endforeach -->