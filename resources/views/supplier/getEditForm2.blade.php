<form action="{{ route('supplier.update', $supplier->id) }}" method="post">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Edit Supplier</h4>
    </div>
    @csrf
    @method('put')
    <div class="modal-body">
        <div class="form-body">
            <div class="form-group">
                <label>Nama</label>
                <input id='eName' type="text" name="name" value="{{ $supplier->name }}" class="form-control" placeholder="Nama" required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input id="eAddress" type="text" name="address" value="{{ $supplier->address }}"  class="form-control" placeholder="Address" required>
            </div>
        </div>
    </div>
    
    <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="saveDataUpdateTD({{ $supplier->id }})" >Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    </div>
</form>

@section('js')
<script>
//     function saveDataUpdateTD(id){
//         var eName = $('#eName').val();
//         var eAddress = $('#eAddress').val();
//         $.ajax({
//             type:'POST',
//             url:'{{route("supplier.saveData")}}',
//             data:{'_token':'<?php echo csrf_token() ?>',
//             'id':id,
//             'name': eName,
//             'address': eAddress
//         },
//         success: function(data){
//             if(data.status == 'ok'){
//                 alert(data.msg)
//                 $('#td_name_'+id).html(eName);
//                 $('#td_address_'+id).html(eName);
//             }
//             // $('#modalContent').html(data.msg)
//         }
//         });
//     }
// </script>
    
@endsection