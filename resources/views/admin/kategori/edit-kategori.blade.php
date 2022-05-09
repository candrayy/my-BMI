@extends('admin.layouts.app')

@section('title', 'my/KATEGORI')
@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Kategori</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Ubah Data Rasa
                            </h6>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('update-kategori',$kategori->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label for="kd_kategori" class="form-label">Kode Kategori</label>
                                <input type="text" id="kd_kategori" name="kd_kategori" class="form-control" value="{{ $kategori->kd_kategori }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" value="{{ $kategori->nama_kategori }}" required>
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