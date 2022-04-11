<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Given Store</title>
  </head>
  <body>
    @include('../partials.navbar')
    <div class="container">
        <h1 class="text-center">{{ $title }}</h1>
        {{-- <h3 class="text-center">Total {{ $jumlah }} Product</h3> --}}
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Product Name</th>
                <th scope="col">Category</th>
                <th scope="col">Formula</th>
              </tr>
            </thead>
            <tbody>
              @php
                $i=1
              @endphp
              @foreach ($product as $collection)
              @foreach ($collection as $item)
              <tr>
                <th scope="row">{{ $i }}</th>
                <td >{{ $item->generic_name}}</td>
                <td >{{ $item->category->name}}</td>
                <td>{{ $item->form }}</td>
              </tr>
              @php
                  $i++
              @endphp
              @endforeach
              @endforeach
              
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>