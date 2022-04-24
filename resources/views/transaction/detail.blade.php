@extends('layouts.conquer2')

@section('title')
Detail Transaction
@endsection

@section('content')
<br>
<div class="portlet">
    <div class="portlet-title">
        <b>Transaction From Nota {{ $data->id }} -  {{ $data->transaction_date}}</b>
    </div>
    <div class="portlet-body">
        <div class="row">
            @foreach ($products as $item)
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="{{ asset(($item->image == '') ? 'img/no_image.png' : 'img/'.$item->image ) }}" height='200px' />
                    <div class="caption">
                        <p align="center"><b>{{ $item->generic_name }}</b></p>
                        <br>
                        <p>Category : <b>{{ $item->category->name }} </b></p>
                        <p>Price : <b>{{ number_format($item->product_price,2) }}</b> </p>
                        <p>Jumlah Beli : <b>{{ $item->pivot->quantity }}</b> </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection 