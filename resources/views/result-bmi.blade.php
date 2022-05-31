@extends('layouts.app')

@section('title', 'my/HASIL')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <!-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Outer Row -->
                    <div class="row justify-content-center">

                    <div class="col-xl-10 col-lg-12 col-md-9">

                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="card">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Hasil - my/BMI</h1>
                                        </div>
                                        <form class="user">
                                            <label for="tb">Nilai BMI Anda</label>
                                            <div class="form-group">
                                                @if($hasil < 18.5)
                                                <span class="badge badge-danger">{{ $hasil }} Kurus</span>
                                                @elseif($hasil >= 18.5 && $hasil <= 29.9)
                                                <span class="badge badge-success">{{ $hasil }} Ideal</span>
                                                @elseif($hasil > 29.9)
                                                <span class="badge badge-warning">{{ $hasil }} Obesitas</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <table class="table">
                                                    <!-- <thead>
                                                        <tr>
                                                            <th scope="col">Kategori</th>
                                                            <th scope="col">Gambar</th>
                                                            <th scope="col">Makanan</th>
                                                            <th scope="col">Kalori</th>
                                                            <th scope="col">Deskripsi</th>
                                                        </tr>
                                                    </thead> -->
                                                    <hr>
                                                    <b><p class="text-center">Rekomendasi Makanan</p></b>
                                                    <tbody>
                                                        @foreach ($bmi as $item)
                                                        <tr>
                                                            <td>{{ $item->nama_kategori }}</td>
                                                            <td>
                                                                <img src="{{ asset('images/makanan/'.$item->gambar) }}" width="100px" height="100px">
                                                            </td>
                                                            <td>{{ $item->nama_makanan }}</td>
                                                            <td>{{ $item->kand_kalori }} (kkal)</td>
                                                            <td>{!! $item->deskripsi !!}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection