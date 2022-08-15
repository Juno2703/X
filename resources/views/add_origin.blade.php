<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Origin list </title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2> Add a new origin </h2>

                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif

                <form action="{{url('save_origin')}}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label for="id_origin" class="form-label"> ID </label>
                        <input type="text" name="id_origin" class="form-control"
                            placeholder="Enter product id">
                    </div>
                    <div class="md-3">
                        <label for="name_origin" class="form-label"> Name </label>
                        <input type="text" name="name_origin" class="form-control"
                            placeholder="Enter product name">
                    </div>

                    <button type="submit" class="btn btn-primary"> Submit </button>
                    <a href="{{url('list_origin')}}" class="btn btn-danger"> Back </a>
                </form>
            </div>
        </div>
  </body>
</html>