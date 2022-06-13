@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}

                <h1>Riwayat Transaksi</h1>
                <table id="nota" class="table table-hover tabel-condensed">
                    <thead>
                        <tr style="width: 10%">Kode</tr>
                        <tr style="width: 50%">Waktu Transaksi</tr>
                        <tr style="width: 30%">Total</tr>
                        <tr style="width: 10%"></tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection

