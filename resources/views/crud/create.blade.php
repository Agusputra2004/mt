@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-3">
            <a href="{{ url('crud') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Barang</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('crud') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="id" class="col-md-2 col-form-label text-md-right">Id</label>

                            <div class="col-md-10">
                                <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>

                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_barang" class="col-md-2 col-form-label text-md-right">Nama Barang</label>

                            <div class="col-md-10">
                                <input id="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" required autocomplete="current-nama_barang">

                                @error('nama_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gambar" class="col-md-2 col-form-label text-md-right">Gambar</label>

                            <div class="col-md-10">
                                <input id="gambar" type="text" class="form-control @error('gambar') is-invalid @enderror" name="gambar" required autocomplete="current-gambar">

                                @error('gambar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-2 col-form-label text-md-right">Harga</label>

                            <div class="col-md-10">
                                <input id="harga" type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" required autocomplete="current-harga">

                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stok" class="col-md-2 col-form-label text-md-right">Stok</label>

                            <div class="col-md-10">
                                <input id="stok" type="text" class="form-control @error('stok') is-invalid @enderror" name="stok" required autocomplete="current-stok">

                                @error('stok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="keterangan" class="col-md-2 col-form-label text-md-right">Keterangan</label>

                            <div class="col-md-10">
                                <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" required autocomplete="current-keterangan">

                                @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-10">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection