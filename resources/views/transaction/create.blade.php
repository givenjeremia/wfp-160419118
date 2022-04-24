@extends('layouts.conquer2')

@section('title')
Create Supplier
@endsection


@section('content')
    <div class="portlet">
        <div class="portlet-title text-bold">
            NEW TRANSACTION
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="{{ route('transaction.store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-md-1">Buyer</label>
                        <div class="col-md-9">
                            <select class="form-control" name="buyer" id="buyer">
                                @foreach ($buyer as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <span class="help-block">
                                Select buyer</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-1">User</label>
                        <div class="col-md-9">
                            <select class="form-control" name="user" id="user">
                                @foreach ($user as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <span class="help-block">
                                Select User</span>
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