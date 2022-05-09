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
                                Ubah Data Makanan
                            </h6>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('update-makanan',$makanan->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label for="kd_kategori" class="form-label">Kategori</label>
                                <select class="form-control" name="kategori_id" id="kategori_id">
                                <option value="{{ $makanan->id }}">{{ $makanan->kategori->nama_kategori }}</option>
                                @foreach($kategori as $ktr)
                                <option value="{{ $ktr->id }}" required>{{ $ktr->nama_kategori }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Pilih Gambar</label>
                                <input type="file" id="gambar" name="gambar" class="form-control" style="height: 45px" required>
                            </div>
                            <img src="{{ asset('images/makanan/'.$makanan->gambar ) }}" width="95px" height="80px" alt="img">
                            <div class="form-group mt-3">
                                <label for="nama_makanan" class="form-label">Nama Makanan</label>
                                <input type="text" id="nama_makanan" name="nama_makanan" class="form-control" value="{{ $makanan->nama_makanan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="kand_kalori" class="form-label">Kandungan Kalori</label>
                                <input type="number" min="0" id="kand_kalori" name="kand_kalori" class="form-control" value="{{ $makanan->kand_kalori }}" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi" class="form-label">Deskripsi Makanan</label>
                                <textarea type="text" id="deskripsi" name="deskripsi" class="form-control" required>{{ $makanan->deskripsi }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-submit">Ubah</button>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection