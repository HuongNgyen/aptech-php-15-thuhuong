<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Number </th>
                <th> User_id </th>
                
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
               
                    <tr>
                        <td> {{$phone->id}} </td>
                        <td> {{$phone->number}} </td>
                        <td> {{$phone->user_id}} </td>
                        
                        <td class="d-flex flex-row justify-content-center">
                            
                            <form action="{{route('phones.edit', $phone->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> EDIT </button> 
                            </form>
                            

                            <form action="{{route('phones.destroy', $phone->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type='hidden' value='DELETE' name='_method'>
                                <button type='submit' class='btn btn-danger ml-2'> DELETE </button>
                            </form>
                                
                        </td>
                    </tr>
               
          
        </tbody>
    </table>
            </div>
        </div>
    </div>
</body>
</html>