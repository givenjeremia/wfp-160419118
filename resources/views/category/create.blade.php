@extends('layouts.conquer2')

@section('title')
Create Category
@endsection

@section('content')
    <div class="portlet">
        <div class="portlet-title text-bold">
            NEW CATEGORY
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="{{ route('kategori_obat.store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    {{-- <h3 class="form-section">Informasi Pribadi</h3> --}}
                    <div class="form-group">
                        <label class="control-label col-md-2">Name Category</label>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control" placeholder="Name Category" required>
                        </div>
                    </div>

                </div>
                <div class="form-actions">
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
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
    
@endsection