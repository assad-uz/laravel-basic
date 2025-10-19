<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel Table Relation</title>
  </head>
  <body>
      <div class="text-center">
        <h1>Category List</h1>

        <br>

      </div>

      <div class="container">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Mechanic name</th>
                <th scope="col">Owner Name</th>
                <th scope="col">Car Name</th>
              </tr>
            </thead>
            <tbody>

             @foreach ($mechanics as $single )

              <tr>
                <th scope="row">{{ $loop->iteration }}</th>

                <td>{{ $single->name }}</td>
                <td>{{ $single->carOwner->name }}</td>
                <td>{{ $single->cars->model }}</td>


              </tr>

              @endforeach

            </tbody>
          </table>
      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>