@extends('layouts.master')
@section('title', 'KMEANS | Home')
@section('content')

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ Beradcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10"><a href="/home">Home</a></h5>
                            </div>
                            <ul class="breadcrumb">
                                {{-- <li class="breadcrumb-item"><a href="../navigation/index.html">Akun</a></li> --}}
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Sample Page</li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->



                <a href="/akun" class="col-xl-6 col-md-6">
                    <div class="card bg-blue-600 dashnum-card text-white overflow-hidden">
                        <span class="round small"></span>
                        <span class="round big"></span>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="avtar avtar-lg">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <span class="text-white d-block f-18 f-w-500 my-2">Akun
                                <span><i class="fa-solid fa-caret-right px-3"></i>{{ count($akun) }}</span>
                            </span>
                            {{-- <p class="mb-0 opacity-50"></p> --}}
                        </div>
                    </div>
                </a>
                <a href="/barang" class="col-xl-6 col-md-6">
                    <div class="card bg-blue-600 dashnum-card text-white overflow-hidden">
                        <span class="round small"></span>
                        <span class="round big"></span>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="avtar avtar-lg">
                                        <i class="fa-solid fa-cubes-stacked"></i>
                                    </div>
                                </div>
                            </div>
                            <span class="text-white d-block f-18 f-w-500 my-2">Barang
                                <span><i class="fa-solid fa-caret-right px-3"></i>{{ count($barang) }}
                                </span>
                            </span>
                        </div>
                    </div>
                </a>
                <a href="/tahun" class="col-xl-6 col-md-6">
                    <div class="card bg-blue-600 dashnum-card text-white overflow-hidden">
                        <span class="round small"></span>
                        <span class="round big"></span>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="avtar avtar-lg">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </div>
                                </div>
                            </div>
                            <span class="text-white d-block f-18 f-w-500 my-2">Tahun
                                <span><i class="fa-solid fa-caret-right px-3"></i>{{ count($tahun) }}
                                </span>
                        </div>
                    </div>
                </a>
                <a href="/bulan" class="col-xl-6 col-md-6">
                    <div class="card bg-blue-600 dashnum-card text-white overflow-hidden">
                        <span class="round small"></span>
                        <span class="round big"></span>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="avtar avtar-lg">
                                        <i class="fa-solid fa-moon"></i>
                                    </div>
                                </div>
                            </div>
                            <span class="text-white d-block f-18 f-w-500 my-2">Bulan
                                <span><i class="fa-solid fa-caret-right px-3"></i><span
                                        class="p-2">{{ count($bulan) }}</span>
                                </span>
                        </div>
                    </div>
                </a>
                <a href="/barang_tahun_bulan" class="col-xl-6 col-md-6">
                    <div class="card bg-blue-600 dashnum-card text-white overflow-hidden">
                        <span class="round small"></span>
                        <span class="round big"></span>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="avtar avtar-lg">
                                        <i class="fa-solid fa-link"></i>
                                    </div>
                                </div>
                            </div>
                            <span class="text-white d-block f-18 f-w-500 my-2">Relasi
                                <span><i class="fa-solid fa-caret-right px-3"></i><span
                                        class="p-2">{{ count($barang_tahun_bulan) }}</span>
                                </span>
                        </div>
                    </div>
                </a>
                <a href="#" onclick="trendMoment()" class="col-xl-6 col-md-6">
                    <div class="card bg-blue-600 dashnum-card text-white overflow-hidden">
                        <span class="round small"></span>
                        <span class="round big"></span>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="avtar avtar-lg">
                                        <i class="fa-solid fa-square-root-variable"></i>
                                    </div>
                                </div>
                            </div>
                            <span class="text-white d-block f-18 f-w-500 my-2">Perhitungan
                                <span><i class="fa-solid fa-caret-right px-3"></i>SPK - TREND MOMENT
                                </span>
                        </div>
                    </div>
                </a>
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

@endsection
