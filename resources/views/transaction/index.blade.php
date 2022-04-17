@extends('layouts.conquer2')

@section('title')
Transaction
@endsection


@section('content')
<h1 class="text-center">List Transaction</h1>
<h3 class="text-center">Total {{ $jumlah }} Transaction</h3>
<div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Pembeli</th>
        <th>Kasir</th>
        <th>Tanggal Transaksi</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @php
        $i=1
      @endphp
      @foreach ($data as $key => $item)
      <tr class="{{ ($key % 2 === 0) ? 'active' : 'success' }}">
        <td>{{ $item->id }}</td>
        <td>{{ $item->buyer->name }}</td>
        <td>{{ $item->user->name}}</td>
        <td>{{ $item->transaction_date }}</td>
        <td>
          <a href="/transaction/detailtransaction/{{ $item->id }}" class='btn btn-xs btn-info' >Show Detail Transaction</a>
          <a class='btn btn-xs btn-info' data-toggle='modal' data-target='#myModal' onclick=' getDetailData({{ $item->id }})'>Show Modal</a>
        </td>
      </tr>
      @php
        $i++
      @endphp
      @endforeach
    </tbody>
  </table>
  
  <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" id="msg">
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
function getDetailData(id)
{
  $.ajax({
    type:'POST',
    url:'{{route("transaction.showAjax")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'id':id
         },
    success: function(data){
       $('#msg').html(data.msg)
    }
  });
}
</script>
@endsection
