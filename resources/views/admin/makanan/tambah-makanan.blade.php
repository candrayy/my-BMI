@extends('admin.layouts.app')

@section('title', 'my/MAKANAN')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Makanan</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Tambah Data Makanan
                            </h6>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('simpan-makanan') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label for="kd_kategori" class="form-label">Kategori</label>
                                <select class="form-control" name="kategori_id" id="kategori_id">
                                @foreach($kategori as $ktr)
                                <option value="{{ $ktr->id }}" required>{{ $ktr->nama_kategori }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Pilih Gambar</label>
                                <input type="file" id="gambar" name="gambar" class="form-control" style="height: 45px" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_makanan" class="form-label">Nama Makanan</label>
                                <input type="text" id="nama_makanan" name="nama_makanan" class="form-control" placeholder="Masukan Nama Makanan" required>
                            </div>
                            <div class="form-group">
                                <label for="kand_kalori" class="form-label">Kandungan Kalori</label>
                                <input type="number" min="0" id="kand_kalori" name="kand_kalori" class="form-control" placeholder="Masukan Kandungan Kalori" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi" class="form-label">Deskripsi Makanan</label>
                                <textarea type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Masukan Deskripsi Makanan" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-submit">Simpan</button>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection