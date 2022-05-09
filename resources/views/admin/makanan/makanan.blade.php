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
                            <a href="{{ route('tambah-makanan') }}" class="btn btn-primary btn-icon-split" type="button">
                                <span class="text">Tambah Data</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Nama Makanan</th>
                                        <th scope="col">Kandungan Kalori</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($makanan as $mkn)
                                    <tr>
                                        <td>{{ $makanan->firstItem()+$loop->index }}</td>
                                        <td>{{ $mkn->kategori->nama_kategori }}</td>
                                        <td>
                                            <img src="{{ asset('images/makanan/'.$mkn->gambar) }}" width="100px" height="100px">
                                        </td>
                                        <td>{{ $mkn->nama_makanan }}</td>
                                        <td>{{ $mkn->kand_kalori }} (kkal)</td>
                                        <td>{!! Str::limit($mkn->deskripsi, 20) !!}</td>
                                        <td>
                                            <a href="{{ route('edit-makanan', $mkn->id) }}" class="btn btn-success btn-icon btn-sm" type="button">
                                                <i class="fas fa-pen"></i></a>
                                            <a href="{{ route('hapus-makanan', $mkn->id) }}" class="btn btn-danger btn-icon btn-sm delete-confirm" type="button">
                                                <i class="fas fa-minus"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $makanan->links() }}
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection