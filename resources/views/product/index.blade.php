@extends('layouts.conquer2')

@section('title')
Product
@endsection



@section('js')
<script>
  function showInfo()
  {
    $.ajax({
      type:'POST',
      url:'{{route("products.showInfo")}}',
      data:'_token=<?php echo csrf_token() ?>',
      success: function(data){
         $('#showinfo').html(data.msg)
      }
    });
  }
  </script>
  
    
@endsection

@section('content')
<li>
  <a href="#">Welcome</a>
</li>
<li>
  <a href="#" onclick="showInfo()">
    <i class="icon-bulb"></a></i>
</li>
</ul>
<div id='showinfo'></div>

{{-- <h4 class="text-center">Grid List</h4> --}}
{{-- <div class="container"> --}}

  {{-- <div class="row">
    @foreach ($data as $item)
    <div class="col-sm-12 col-md-3">
      <div class="thumbnail">
        <img src="{{ asset(($item->image == '') ? 'img/no_image.png' : 'img/'.$item->image ) }}" alt=""
          style="width: 100%; height: 200px;">
        <div class="caption">
          <h3>{{ $item->generic_name }}</h3>
          <p>
            {{ $item->form }}
          </p>
        </div>
      </div>
    </div>
    @endforeach
  </div> --}}

  {{-- <div class="row row-cols-3">

    @foreach($data as $item)
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="{{ asset(($item->image == '') ? 'img/no_image.png' : 'img/'.$item->image ) }}" class="card-img-top"
          alt="...">
        <div class="card-body">
          <p class="card-text text-center text-bold">{{ $item->generic_name }}</p>
          <p class="card-text text-center">{{ $item->form }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div> --}}
{{-- </div> --}}
<br>
<h1 class="text-center">Products Medicine</h1>
<h4 class="text-center">Table List</h4>
<div class="table-responsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Generic Name</th>
        <th>Category</th>
        <th>Form</th>
        <th>Resiction Formula</th>
        <th>Description</th>
        <th>Faskes 1</th>
        <th>Faskes 2</th>
        <th>Faskes 3</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $key => $item)
      <tr class="{{ ($key % 2 === 0) ? 'active' : 'success' }}">
        <th scope="row">{{ $item->id }}</th>
        <td>
          <a class="btn btn-default edittable" data-toggle="modal" href="#detail_{{$item->id}}">
            {{ $item->generic_name }}
          </a>
          <div class="modal fade" id="detail_{{$item->id}}" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">{{$item->generic_name}}</h4>
                </div>
                <div class="modal-body">
                  <img src="{{ asset(($item->image == '') ? 'img/no_image.png' : 'img/'.$item->image ) }}"
                    height='200px' />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </td>
        {{-- <td>{{ $item->generic_name }}</td> --}}
        <td>{{ $item->category->name }}</td>
        <td>{{ $item->form }}</td>
        <td>{{ $item->restriction_formula }}</td>
        <td>{{ $item->description }}</td>
        <td>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg"
            viewBox="0 0 16 16">
            @if ($item->faskes_tk1==1)
            <path
              d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
            @endif
          </svg>
        </td>
        <td>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg"
            viewBox="0 0 16 16">
            @if ($item->faskes_tk2==1)
            <path
              d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
            @endif
          </svg>
        </td>
        <td>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg"
            viewBox="0 0 16 16">
            @if ($item->faskes_tk3==1)
            <path
              d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
            @endif
          </svg>
        </td>
        <td>{{ number_format($item->product_price, 2) }}</td>
        <td>
          <a class='btn btn-info' data-target="#show{{$item->id}}" data-toggle='modal'>
            Detail
          </a>
          <div class="modal fade" id="show{{$item->id}}" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- put animated gif here -->
                {{-- <img class="loading" src="{{ asset('assets/img/ajax-modal-loading.gif') }}" alt=""> --}}
              </div>
            </div>
          </div>
        </td>
        <td>
          <a href="{{ route('obat.edit', $item->id) }}" class="btn btn-success">UPDATE</a>
          @can('delete-permission', $item)
          <form action="{{ route('obat.destroy', $item->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">DELETE</button>
          </form>
              
          @endcan
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>




@endsection

{{--
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Given Store</title>
</head>

<body>
  @include('../partials.navbar')
  <div class="container">
    <h1 class="text-center">Products Medicine</h1>
    <h4 class="text-center">Grid List</h1>
      <div class="container">
        <div class="row row-cols-3">

          @foreach($data as $item)
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="{{ asset(($item->image == '') ? 'img/no_image.png' : 'img/'.$item->image ) }}"
                class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-center text-bold">{{ $item->generic_name }}</p>
                <p class="card-text text-center">{{ $item->form }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <br>
      <h4 class="text-center">Table List</h1>
        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Generic Name</th>
              <th scope="col">Category</th>
              <th scope="col">Form</th>
              <th scope="col">Resiction Formula</th>
              <th scope="col">Description</th>
              <th scope="col">Faskes 1</th>
              <th scope="col">Faskes 2</th>
              <th scope="col">Faskes 3</th>
              <th scope="col">Price</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <th scope="row">{{ $item->id }}</th>
              <td>{{ $item->generic_name }}</td>
              <td>{{ $item->category->name }}</td>
              <td>{{ $item->form }}</td>
              <td>{{ $item->restriction_formula }}</td>
              <td>{{ $item->description }}</td>
              <td>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-check-lg" viewBox="0 0 16 16">
                  @if ($item->faskes_tk1==1)
                  <path
                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                  @endif
                </svg>
              </td>
              <td>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-check-lg" viewBox="0 0 16 16">
                  @if ($item->faskes_tk2==1)
                  <path
                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                  @endif
                </svg>
              </td>
              <td>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-check-lg" viewBox="0 0 16 16">
                  @if ($item->faskes_tk3==1)
                  <path
                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                  @endif
                </svg>
              </td>
              <td>{{ number_format($item->product_price, 2) }}</td>
            </tr>
            @endforeach

          </tbody>
        </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html> --}}