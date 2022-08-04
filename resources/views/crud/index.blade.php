@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mb-3">
            <a href="{{ url('crud/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Barang</a>
        </div>
        <div class="col-md-12">
            @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>{{ $message }}</strong>
              </div>
            @endif
        </div>
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Barang
                </div>
                <div class="card-body">
                    <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">No.</th>
                              <!--th scope="col">Id</th-->
                              <th scope="col">Nama Barang</th>
                              <th scope="col">Gambar</th>
                              <th scope="col">Harga</th>
                              <th scope="col">Stok</th>
                              <th scope="col">Keterangan</th>
                              <th scope="col">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $nomer = 1;
                            ?>
                            @foreach($barangs as $barang)
                            <tr>
                              <th scope="row">{{ $nomer++ }}</th>
                              <!--td>{{ $barang->id }}</td-->
                              <td>{{ $barang->nama_barang }}</td>
                              <td>{{ $barang->gambar }}</td>
                              <td>{{ $barang->harga }}</td>
                              <td>{{ $barang->stok }}</td>
                              <td>{{ $barang->keterangan }}</td>
                              <td>
                                  <form method="POST" action="{{ url('crud') }}/{{ $barang->id }}">

                                        <a href="{{ url('crud') }}/{{ $barang->id }}/edit" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> Edit</a>

                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                    </form>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection