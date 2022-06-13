@extends('layouts.conquer2')

@section('title')
List Supplier
@endsection


@section('content')
<h1 class="text-center">List Supplier</h1>
<h3 class="text-center">Total {{ $jumlah }} Supplier</h3>
<br>
<a href="#modalCreate" data-toggle="modal" class='btn btn-info'>New Supplier (Modal)</a>
<br>
<br>
<div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Supplier Name</th>
        <th>Address</th>
        <th>Logo</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @php
        $i=1
      @endphp
      @foreach ($data as $key => $item)
      <tr id="tr_{{ $item->id }}" class="{{ ($key % 2 === 0) ? 'active' : 'success' }}">
        <td>{{ $i }}</td>
        <td id="td_name_{{ $item->id }}" class="editable">{{ $item->name}}</td>
        <td id="td_address_{{ $item->id }}" class="editable">{{ $item->address}}</td>
        <td>
          <img src="{{  asset(($item->logo == '') ? 'img/no_image.png' : 'img/'.$item->logo ) }}" width="100px"  class=""alt="">
          {{-- Modal Change Image --}}
          <div class="modal fade" id="modalChange_{{ $item->id }}" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="{{ route('supplier.changeLogo') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                   <h4 class="modal-title">Change Logo</h4>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-2">Logo</label>
                            <div class="col-md-9">
                                <input type="file" name="logo" class="form-control" required>
                            </div>
                        </div>
                        
                    </div>
                    <input type="hidden" name="id" value="{{ $item->id }}" />
          
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Change</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>

                  </div>
                </form>
            
            
            
              </div>
            </div>
          </div>
          <br>

          <a href="#modalChange_{{ $item->id }}" data-toggle="modal" class="btn btn-xs btn-default">Change</a>


        </td>
        <td>
          <a href="{{ route('supplier.edit', $item->id) }}" class="btn btn-success">UPDATE</a>
          <a href="#modalEdit" data-toggle="modal" class="btn btn-success" onclick="getEditForm({{ $item->id }})">UPDATE MODAL A</a>
          <a href="#modalEdit" data-toggle="modal" class="btn btn-success" onclick="getEditForm2({{ $item->id }})">UPDATE MODAL B</a>
          
          @can('delete-permission', $item)
              
          <form action="{{ route('supplier.destroy', $item->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" onclick="if(!confirm('Are you sure you want to destroy this data')) return false;">DELETE</button>
          </form>
          <a class="btn btn-danger" onclick="if(confirm('Are you sure you want to destroy this data')) deleteDataRemoveTR({{ $item->id }})">DELETE 2</a>
          @endcan


        </td>
      </tr>
      @php
        $i++
      @endphp
      @endforeach
    </tbody>
  </table>
  
  {{-- <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
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
  </div> --}}
  
</div>

<div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="modalContent">

    </div>
  </div>
</div>

<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
         <h4 class="modal-title">Add New Supplier</h4>
      </div>
      <div class="modal-body">
        {{-- Form --}}
        <form action="{{ route('supplier.store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-body">
              <div class="form-group">
                  <label class="control-label col-md-2">Nama</label>
                  <div class="col-md-9">
                      <input type="text" name="name" class="form-control" placeholder="Nama" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-2">Address</label>
                  <div class="col-md-9">
                      <input type="text" name="address" class="form-control" placeholder="Address" required>
                  </div>
              </div>
              
          </div>

          {{-- <div class="form-actions">
              <div class="row">
                  <div class="col-md-6">
                      <div class="row">
                          <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn btn-success">Submit</button>
                              <button type="button" class="btn btn-default">Cancel</button>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                  </div>
              </div>
          </div> --}}

          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          </div>
      </form>
    </div>
    {{-- <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div> --}}
  </div>
</div>

</div>
@endsection

{{-- @section('initialscrit')
<script>

 
</script>
  
@endsection --}}

@section('js')
<script>
  
   $(".editable").editable({
    closeOnEnter:true,
    callback:function(data){
    if(data.content){
      var s_id = data.$el[0].id;
      
      var fname = s_id.split('_')[1];
      var id = s_id.split('_')[2];
      // alert(data.content);

      $.ajax({
        type: "POST",
        url:'{{ route("supplier.saveDataField") }}', 
        data:{'_token':'<?php echo csrf_token() ?>',
        'id' :id,
        'fname' : fname,
        'value' : data.content
        },
        success:function(data){
          alert(data.msg);
        }
      });
      
    }
  }
  });

function getEditForm(id)
{
  $.ajax({
    type:'POST',
    url:'{{route("supplier.getEditForm")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'id':id
         },
    success: function(data){
       $('#modalContent').html(data.msg)
    }
  });
}
function getEditForm2(id)
{
  $.ajax({
    type:'POST',
    url:'{{route("supplier.getEditForm2")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'id':id
         },
    success: function(data){
       $('#modalContent').html(data.msg)
    }
  });
}
function saveDataUpdateTD(id){
        var eName = $('#eName').val();
        var eAddress = $('#eAddress').val();
        $.ajax({
            type:'POST',
            url:'{{route("supplier.saveData")}}',
            data:{'_token':'<?php echo csrf_token() ?>',
            'id':id,
            'name': eName,
            'address': eAddress
        },
        success: function(data){
            if(data.status == 'ok'){
                alert(data.msg)
                $('#td_name_'+id).html(eName);
                $('#td_address_'+id).html(eAddress);
            }
            // $('#modalContent').html(data.msg)
        }
        });
    }

  function deleteDataRemoveTR(id){
    $.ajax({
    type:'POST',
    url:'{{route("supplier.deleteData")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'id':id
         },
    success: function(data){
      if(data.status == 'ok'){
        alert(data.msg)
        $('#tr_'+id).remove();
      }
      else{
        alert(data.msg)
      }
    }
  });
  }

</script>
@endsection
