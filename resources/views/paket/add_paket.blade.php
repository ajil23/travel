@extends('admin.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Tambah Paket</h1>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="{{route('store.paket')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="paket" class="form-label">Nama Paket</label>
                        <input type="text" class="form-control" id="nama" placeholder="Tuliskan nama dari paket yang ingin dibuat" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="destinasi" class="form-label">Destinasi Paket</label>
                        <input type="text" class="form-control" id="destinasi" placeholder="Tuliskan destinasi dari paket yang ingin dibuat" name="destinasi" required>
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Harga Paket</label>
                        <input type="text" class="form-control" id="harga" placeholder="Cantumkan harga dari paket yang dibuat" name="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Rating Paket</label>
                        <input type="text" class="form-control" id="rating" placeholder="Berikan rating untuk destinasi wisata yang dituju" name="rating" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Sampul</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>                        
                    <br>
                    <div>
                        <button type="submit" value="Submit" class="btn btn-success shadow">Simpan</button>
                        <button type="button" onclick="history.back()" class="btn btn-danger shadow">Batalkan</button>
                    </div>     
                </form>
            </div>
        </div>
    </div>
@endsection
