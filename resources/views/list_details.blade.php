<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Detail list</title>
  </head>
  <body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
            @if (Session::has('loginID'))
                            
                <h2>
                <a href="{{url('list')}}" class="btn btn-success">List Product</a>|
                <a href="{{url('list_category')}}" class="btn btn-success">Category</a>|
                <a href="{{url('list_origin')}}" class="btn btn-success">Origin</a>|
                <a href="{{url('list_details')}}" class="btn btn-success">Product Details</a>
                <a href="" class="btn btn-danger">Welcome: {{Session::get('loginID')}}</a>
                <a href="{{url('/logout_list')}}" class="btn btn-danger">Logout</a>
                </h2>

            @if (Session::has('success'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('success')}}
                </div>    
                @endif
                <div style="margin-right:10%; float:right;">
                    <a href="{{url('select_product')}}" class="btn btn-success">Add new</a>

                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Age</th>
                            <th>Size</th>
                            <th>Image 1</th>
                            <th>Image 2</th>
                            <th>Image 3</th>
                            <th>Product Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <td>{{$row->DetailID}}</td>
                                <td>{{$row->DetailAge}}</td>
                                <td>{{$row->DetailSize}}</td>
                                <td><img src="image/{{$row->DetailImage1}}" 
                                         alt="" height="90px" width="90px"></td>
                                <td><img src="image/{{$row->DetailImage2}}" 
                                         alt="" height="90px" width="90px"></td>
                                <td><img src="image/{{$row->DetailImage3}}" 
                                         alt="" height="90px" width="90px"></td>
                                         @foreach ($product as $row1 )
                                         @if ($row1->ProductID===$row->ProductID)
                                         <td>{{$row1->ProductName}}</td>
                                         @break
                                         @endif
                                     @endforeach
                                <td><a href="{{url('edit_details/'.$row->DetailID)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{url('delete_details/'.$row->DetailID)}}" class="btn btn-danger"
                                        onclick="return confirm('Are you sure?');">Delete</a> </td>
                            </tr>
                        @endforeach        
                    </tbody>
                </table>
                @else
                <a href="{{url('login')}}" class="btn btn-success">Login</a>
                @endif
            </div>
        </div>
    </div>
  </body>
</html>