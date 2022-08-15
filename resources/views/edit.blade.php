<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Product list </title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2> Update product </h2>

                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif

                <form action="{{url('update')}}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label for="id" class="form-label"> ID </label>
                        <input type="text" name="id" class="form-control"
                            value="{{$data -> ProductID}}" readonly>
                    </div>
                    <div class="md-3">
                        <label for="name" class="form-label"> Name </label>
                        <input type="text" name="name" class="form-control"
                        value="{{$data -> ProductName}}">
                    </div>
                    <div class="md-3">
                        <label for="price" class="form-label"> Price </label>
                        <input type="text" name="price" class="form-control"
                        value="{{$data -> ProductPrice}}">
                    </div>
                    <div class="md-3">
                        <label for="image" class="form-label"> Image </label>
                        <input type="file" name="image" class="form-control" >
                    </div>
                    <div class="md-3">
                        <label for="categoryid" class="form-label"> CategoryID </label>
                        <select name="categoryid">
                            @foreach ($categories as $row)
                                @if ($data->CategoryID===$row->CategoryID)
                                    <option value="{{$row->CategoryID}}" >{{$row->CategoryName}}</option>
                                    break;
                                @endif
                            @endforeach
                            @foreach ($categories as $row)
                                @if ($data->CategoryID!==$row->CategoryID)
                                    <option value="{{$row->CategoryID}}" >{{$row->CategoryName}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="md-3">
                        <label for="originid" class="form-label"> OriginID </label>
                        <select name="originid">
                            @foreach ($origin as $row)
                                @if ($data->OriginID===$row->OriginID)
                                    <option value="{{$row->OriginID}}" >{{$row->OriginName}}</option>
                                    break;
                                @endif
                            @endforeach
                            @foreach ($origin as $row)
                                @if ($data->OriginID!==$row->OriginID)
                                    <option value="{{$row->OriginID}}" >{{$row->OriginName}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary"> Submit </button>
                    <a href="{{url('list')}}" class="btn btn-danger"> Back </a>
                </form>
            </div>
        </div>
  </body>
</html>