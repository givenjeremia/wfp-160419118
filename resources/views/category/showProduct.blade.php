<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Product In Category {{ $nama }}</h4>
    </div>
    <div class="modal-body">
      <div class='row'>
        @foreach($data_product as $item)
            <div class='col-md-4' style='border:1px solid #eee;text-align:center'>
              <img src="{{ asset(($item->image == '') ? 'img/no_image.png' : 'img/'.$item->image ) }}" height='100px' /></a> <br>
            {{ $item->generic_name }} 
            <br> Rp. 
            {{ $item->product_price }}
            </div>
        @endforeach
        </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>