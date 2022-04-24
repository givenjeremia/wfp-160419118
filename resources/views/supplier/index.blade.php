@extends('layouts.conquer2')

@section('title')
List Supplier
@endsection


@section('content')
<h1 class="text-center">List Category</h1>
<h3 class="text-center">Total {{ $jumlah }} Category</h3>
<div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Supplier Name</th>
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
  
  <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" id="showproducts">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Detail Product</h4>
        </div>
        <div class="modal-body">
          <img src="{{ asset('conquer2/img/ajax-modal-loading.gif') }}" alt="">
            
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
     </div>
    </div>
  </div>
  
</div>
@endsection

@section('js')
<script>
function showProducts(category_id)
{
  $.ajax({
    type:'POST',
    url:'{{route("category.showProducts")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'category_id':category_id
         },
    success: function(data){
       $('#showproducts').html(data.msg)
    }
  });
}
</script>
@endsection
