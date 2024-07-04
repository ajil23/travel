@extends('admin.admin_master') 
@section('admin')

   <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pemesanan</h1>
        <a href="{{route('add.pemesanan')}}" class="btn btn-link">
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
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pemesanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Paket</center></th>
                            <th><center>Nama</center></th>
                            <th><center>Qty</center></th>
                            <th><center>Telepon</center></th>
                            <th><center>Email</center></th>
                            <th><center>Total</center></th>
                            <th><center>Pembayaran</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemesanan as $item)
                        <tr>
                            <td><center>{{$loop->iteration}}</center></td>
                            <td><center>{{$item->paket->nama}}</center></td>
                            <td><center>{{$item->nama}}</center></td>
                            <td><center>{{$item->qty}}</center></td>
                            <td><center>{{$item->telepon}}</center></td>
                            <td><center>{{$item->email}}</center></td>
                            <td><center>{{$item->total}}</center></td>
                            <td><center>{{$item->pembayaran}}</center></td>
                            <td colspan="2">
                               <center>
                                <a href="{{route('edit.pemesanan', $item->id)}}" class="btn btn-link">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning">
                                            <i class="fas fa-solid fa-pen"></i>
                                        </button>
                                    </div>
                                </a>
                                <a href="{{route('delete.pemesanan', $item->id)}}" class="btn btn-link">
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
                {{-- {{$datatamu->links('pagination::bootstrap-5')}} --}}
            </div>
        </div>
    </div>
</div>
   @endsection