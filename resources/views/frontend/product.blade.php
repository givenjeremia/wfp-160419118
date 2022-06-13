@extends('layouts.frontend')

@section('title', 'Products')

@section('content')
    <div class="container products">

        <div class="row">
            @foreach ($products as $item)
            
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ asset(($item->image == '') ? 'img/no_image.png' : 'img/'.$item->image ) }}" alt="" width="25%">
                    <div class="caption">
                        <h4>{{ $item->generic_name }}</h4>
                        <p>{{ Str::limit(strtolower($item->description), 50, '...')  }}</p>
                        <p><strong>Price: </strong>Rp. {{ number_format($item->product_price, 2) }}</p>
                        <p class="btn-holder"><a href="/add-to-cart/{{ $item->id }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>

            @endforeach

        </div><!-- End row -->

    </div>

@endsection