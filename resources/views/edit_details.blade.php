<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Detail list </title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2> Update Detail </h2>

                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif

                <form action="{{url('update_details')}}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label for="id_details" class="form-label"> ID </label>
                        <input type="text" name="id_details" class="form-control"
                            value="{{$data -> DetailID}}" readonly>
                    </div>
                    <div class="md-3">
                        <label for="age_details" class="form-label"> Name </label>
                        <input type="text" name="age_details" class="form-control"
                        value="{{$data -> DetailAge}}">
                    </div>
                    <div class="md-3">
                        <label for="size_details" class="form-label"> Price </label>
                        <input type="text" name="size_details" class="form-control"
                        value="{{$data -> DetailSize}}">
                    </div>
                    <div class="md-3">
                        <label for="image1_details" class="form-label"> Image 1 </label>
                        <input type="file" name="image1_details" class="form-control" >
                    </div>
                    <div class="md-3">
                        <label for="image2_details" class="form-label"> Image 2 </label>
                        <input type="file" name="image2_details" class="form-control" >
                    </div>
                    <div class="md-3">
                        <label for="image2_details" class="form-label"> Image 3</label>
                        <input type="file" name="image3_details" class="form-control" >
                    </div>
                    <div class="md-3">
                        <label for="id" class="form-label"> Product Name </label>
                        <select name="productid">
                            @foreach ($product as $row)
                                @if ($data->ProductID===$row->ProductID)
                                    <option value="{{$row->ProductID}}" >{{$row->ProductName}}</option>
                                    break;
                                @endif
                            @endforeach
                            @foreach ($product as $row)
                                @if ($data->ProductID!==$row->ProductID)
                                    <option value="{{$row->ProductID}}" >{{$row->ProductName}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    

                    <button type="submit" class="btn btn-primary"> Submit </button>
                    <a href="{{url('list_details')}}" class="btn btn-danger"> Back </a>
                </form>
            </div>
        </div>
  </body>
</html>