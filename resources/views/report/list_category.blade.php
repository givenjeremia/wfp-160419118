@extends('layouts.conquer2')

@section('title')
Report Categories
@endsection

@section('content')

<h1 class="text-center">List Category</h1>
<h3 class="text-center">Total {{ $jumlah }} Category</h3>
<div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Category Name</th>
      </tr>
    </thead>
    <tbody>
      @php
        $i=1
      @endphp
      @foreach ($data as $key => $item)
      <tr class="{{ ($key % 2 === 0) ? 'active' : 'success' }}">
        <td>{{ $i }}</td>
        <td>{{ $item->name}}</td>
      </tr>
      @php
        $i++
      @endphp
      @endforeach
    </tbody>
  </table>
</div>
    
@endsection

{{-- <!doctype html>
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
        <h3 class="text-center">Total {{ $jumlah }} Category</h3>
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Category Name</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $i=1
              @endphp
              @foreach ($data as $item)
              <tr>
                <th scope="row">{{ $i }}</th>
                <td >{{ $item->name}}</td>
              </tr>
              @php
                $i++
              @endphp
              @endforeach
              
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html> --}}