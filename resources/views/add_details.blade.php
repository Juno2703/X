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
                <h2> Add a new Details </h2>

               

                <form action="{{url('save_details')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="md-3">
                        <input type="number" name="productid" class="form-control"
                            value="{{$data -> ProductID}}" hidden>
                    </div>
                    <div class="md-3">
                        <label for="name" class="form-label"> ProductName </label>
                        <input type="text" name="name" class="form-control"
                            value="{{$data -> ProductName}}" readonly>
                    </div>
                    <div class="md-3">
                        <label for="id_details" class="form-label"> ID </label>
                        <input type="number" name="id_details" class="form-control"
                            placeholder="Enter detail index number">
                    </div>
                    <div class="md-3">
                        <label for="age_details" class="form-label"> Age </label>
                        <input type="text" name="age_details" class="form-control"
                            placeholder="Enter product lift expectancy">
                    </div>
                    <div class="md-3">
                        <label for="size_details" class="form-label"> Size </label>
                        <input type="number" name="size_details" class="form-control"
                            placeholder="Enter product price">
                    </div>
                    <div class="md-3">
                        <label for="image1_details" class="form-label"> Image 1 </label>
                        <img src="image/{{$data->ProductImage}}" 
                                         alt="" height="90px" width="90px">
                    </div>
                    <div class="md-3">
                        <label for="image2_details" class="form-label"> Image 2 </label>
                        <input type="file" name="image2_details" class="form-control">
                    </div>
                    <div class="md-3">
                        <label for="image3_details" class="form-label"> Image 3 </label>
                        <input type="file" name="image3_details" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary"> Submit </button>
                    <a href="{{url('list_details')}}" class="btn btn-danger"> Back </a>
                </form>
            </div>
        </div>
  </body>
</html>