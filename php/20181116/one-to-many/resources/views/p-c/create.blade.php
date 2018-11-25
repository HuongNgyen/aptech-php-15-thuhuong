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
            <form action="{{route('p-c.store')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="POST" />
                    <div>
                        Category_id: <input type="text" id="category_id" placeholder="Category_id" name="category_id" >
                    </div>
                    <div>
                       Title: <input type="text" id="title" placeholder="Title" name="title" >
                    </div>
                    <div>
                       Description: <input type="text" id="description" placeholder="Description" name="description" >
                    </div>
                    <div>
                       Content: <input type="text" id="content" placeholder="Content" name="content" >
                    </div>
                    
                    <div>
                        <button type="submit"> CREATE
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>