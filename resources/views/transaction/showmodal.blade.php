<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Detail transaction {{ $id }}</h4>
    </div>
    <div class="modal-body">
      <div class="row">
        @foreach ($data_product as $item)
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
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>