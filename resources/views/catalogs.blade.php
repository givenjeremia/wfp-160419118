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
    @include('partials.navbar')
    <div class="container">
        <h1>{{ $title }}</h1>
        
        @foreach ($data as $item)
        <div class="card mb-3" >
            <div class="row g-2">
              <div class="col-md-4">
                <img src="{{ asset($item['image_link']) }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $item['name'] }}</h5>
                  <p class="card-text">{{ $item['desc'] }}</p>
                  <p class="card-text"><small class="text-muted"> <a class=" text-decoration-none" href="{{ $item['slug'].'/'.$item['id'] }}">Read More..</a></small></p>
                </div>
              </div>
            </div>
          </div>
         @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>