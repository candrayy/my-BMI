@extends('layouts.app')

@section('title', 'my/BMI')
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
                                            <h1 class="h4 text-gray-900 mb-4">Kalkulator - my/BMI</h1>
                                        </div>
                                        <form action="{{ route('bmi-result') }}" class="login-form" method="get">
                                        <form class="user">
                                            <label for="tinggi">Tinggi Badan</label>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control form-control-user"
                                                    id="tinggi" name="tinggi" placeholder="Masukkan Tinggi Badan (cm)">
                                            </div>
                                            <label for="berat">Berat Badan</label>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control form-control-user"
                                                    id="berat" name="berat" placeholder="Masukkan Berat Badan (kg)">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-user btn-block" type="submit">
                                                    Hitung
                                                </button>
                                            </div>
                                        </form>
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