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
                <h2> Select the product to enter product detail </h2>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
                <form action="{{url('add_details')}}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label for="id" class="form-label"> Product Name </label>
                        <select name="productid">
                            <option></option>
                            @foreach ($data as $row)
                                <option value={{$row['ProductID']}}>{{$row['ProductName']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary"> Next </button>
                    <a href="{{url('list_details')}}" class="btn btn-danger"> Back </a>
                </form>
            </div>
        </div>
  </body>
</html>