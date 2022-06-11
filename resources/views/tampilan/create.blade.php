@extends('layouts.main')
@section('container')
    <div class="container-fluid" style="padding-top: 50px;  ">
        <!-- Data Tabel -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Tambah Mahasiswa</h6>
            </div>
            <div class="card-body">
                <form action="/create" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NRP</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="nrp" placeholder="200411100010">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NAMA </label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">EMAIL</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="email" placeholder="nama@gmail.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input_stock_barang" class="col-sm-2 col-form-label">ALAMAT</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="alamat" placeholder="Nama Kota">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-dark">Tambah</button>
                            <a href="{{ Route('home') }}"><button type="button" class="btn btn-dark">Batal</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection()
