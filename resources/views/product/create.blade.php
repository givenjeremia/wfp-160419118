@extends('layouts.conquer2')

@section('title')
Create Product
@endsection

@section('content')
<div class="portlet">
    <div class="portlet-title text-bold">
        New Product
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="{{ route('obat.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="form-body">
                {{-- <h3 class="form-section">Informasi Pribadi</h3> --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Generic Name</label>
                            <div class="col-md-9">
                                <input type="text" name="generic_name" class="form-control" placeholder="Generic Name">
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Description</label>
                            <div class="col-md-9">
                                <input type="text" name="desc" class="form-control" placeholder="Description">
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Category</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category" id="category">
                                    @foreach ($category as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <span class="help-block">
                                    Select Category</span>
                            </div>
                        </div>
                    </div>

                    <!--/span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Formula</label>
                            <div class="col-md-9">
                                <input type="text" name="form" class="form-control" placeholder="Formula">
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Restriction Formula</label>
                            <div class="col-md-9">
                                <input type="text" name="restriction_formula" class="form-control"
                                    placeholder="Restriction Formula">
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Product Price</label>
                            <div class="col-md-9">
                                <input type="number" name="product_price" class="form-control" class="form-control"
                                    placeholder="Product Price" required>
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-md-4">Faskes TK1</label>
                            <input type="checkbox" name="faskes_tk1" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-md-4">Faskes TK2</label>
                            <input type="checkbox" name="faskes_tk2" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label col-md-4">Faskes TK3</label>
                            <input type="checkbox" name="faskes_tk3" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Restriction Formula</label>
                            <div class="col-md-9">
                                <input type="file" name="image_product" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!--/span-->
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