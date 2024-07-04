@extends('admin.admin_master') 
@section('admin')

   <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket</h1>
        <a href="{{route('add.paket')}}" class="btn btn-link">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-success">
                    <i class="fas fa-solid fa-plus"></i>
                </button>
                <button type="button" class="btn btn-success">Tambah Data</button>
            </div>
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Paket</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Nama</center></th>
                            <th><center>Lokasi</center></th>
                            <th><center>Harga</center></th>
                            <th><center>Rating</center></th>
                            <th><center>Sampul</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paket as $item)
                        <tr>
                            <td><center>{{$loop->iteration}}</center></td>
                            <td><center>{{$item->nama}}</center></td>
                            <td><center>{{$item->destinasi}}</center></td>
                            <td><center>Rp.{{$item->harga}}</center></td>
                            <td><center>{{$item->rating}}</center></td>
                            <td><center><img src="{{ asset('storage/'.$item->image) }}" alt="paket" style="height: 5rem; width:4rem"></center></td>
                            <td colspan="2">
                               <center>
                                <a href="{{route('edit.paket', $item->id)}}" class="btn btn-link">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning">
                                            <i class="fas fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </a>
                                <a href="{{route('delete.paket', $item->id)}}" class="btn btn-link">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-danger">
                                            <i class="fas fa-solid fa-trash"></i>
                                        </button>
                                    </div>
                                </a>
                               </center>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
   @endsection