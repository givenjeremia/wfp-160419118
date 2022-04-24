@extends('layouts.conquer2')

@section('title')
Product Transaction
@endsection

@php
$id = 2;
if(session('id_transaction')){
$id = session('id_transaction');
}

$product_detail = [];
foreach($transactions as $item){
    // dd($);
    if(($item->id) == $id){
        // dd($item->id);
        foreach ($item->products as $items){
            // dd($items);
            array_push($product_detail,$items);
        }
    }
}
// dd($product_detail);

@endphp

@section('content')
<div class="portlet">
    <div class="portlet-title text-bold">
        ID NOTA : {{ $id }}
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ route('producttransaction.store') }}" class="form-horizontal" method="post"enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_transaction" value="{{ $id }}">
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-1">Product</label>
                    <div class="col-md-9">
                        <select class="form-control" price="0" name="product" id="product" required>
                            @foreach ($products as $item)
                            <option value="{{ $item->id }}" price="{{ $item->product_price }}">{{ $item->generic_name }}
                                - {{ $item->form }}</option>
                            @endforeach
                        </select>
                        <span class="help-block">
                            Select Product</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-1">Quantity</label>
                    <div class="col-md-9">
                        <input type="number" min="1" name="quantity" id="quantity" class="form-control"
                            placeholder="Quantity" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-1">Price</label>
                    <div class="col-md-5">
                        <input type="text" name="product_price" id="product_price" class="form-control"
                            placeholder="Product Price" required>
                    </div>
                    <button type="button" class=" btn btn-default" onclick="perhitungan()">Hitung Total</button>
                </div>

            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <a href="/transaction" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
    <div class="portlet-body">
        <h1 class="text-center">List Product Translation</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=1
                    @endphp
                    @foreach ($product_detail as $key => $item)
                    <tr class="{{ ($key % 2 === 0) ? 'active' : 'success' }}">
                        <td>{{ $item->generic_name }}</td>
                        <td>{{ $item->category->name }} </td>
                        <td>{{ $item->pivot->quantity }}</td>
                        <td>{{ number_format($item->pivot->price,2) }}</td>
                    </tr>
                    @php
                    $i++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection


@section('js')
<script>
    function perhitungan() {   
        var selected = document.getElementById("product");
        var selected_option = selected.options[selected.selectedIndex].getAttribute("price");
        var quantity = document.getElementById("quantity").value;
        var total = selected_option*quantity;
        document.getElementById('product_price').setAttribute("value", total);

    }
</script>
@endsection