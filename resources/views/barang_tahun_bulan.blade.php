@extends('layouts.master')
@section('title', 'SPK | Relasi')
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
                                <h5 class="m-b-10"><a href="/barang_tahun_bulan">Relasi</a></h5>
                            </div>
                            <ul class="breadcrumb">
                                {{-- <li class="breadcrumb-item"><a href="../navigation/index.html">Relasi</a></li> --}}
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

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5>Relasi</h5>
                        </div>
                        <div class="card-body">
                            {{-- <div class="bd-example"> --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="/barang_tahun_bulan-add" class="btn btn-sm bg-blue-100 mb-3">Tambah Relasi
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                    <table class="table table-hover" id="myTable">
                                        <thead class="bg-blue-100">
                                            <tr>
                                                <th>No</th>
                                                <th>Barang</th>
                                                {{-- <th>Satuan</th> --}}
                                                <th>Tahun</th>
                                                <th>Bulan</th>
                                                <th>Jumlah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($barang as $item_barang)
                                                <tr>
                                                    <th>{{ $loop->iteration }}</th>
                                                    <td>{{ $item_barang->nama }}</td>
                                                    {{-- <td>
                                                        @foreach ($item_barang->barang_tahun_bulan as $item_barang_tahun_bulan)
                                                            <li>
                                                                {{ $item_barang_tahun_bulan->satuan }}
                                                            </li>
                                                        @endforeach
                                                    </td> --}}
                                                    <td>
                                                        @foreach ($item_barang->barang_tahun_bulan as $item_barang_tahun_bulan)
                                                            <li>
                                                                {{ $item_barang_tahun_bulan->tahun->nama }}
                                                            </li>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach ($item_barang->barang_tahun_bulan as $item_barang_tahun_bulan)
                                                            <li>
                                                                {{ $item_barang_tahun_bulan->bulan->nama }}
                                                            </li>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach ($item_barang->barang_tahun_bulan as $item_barang_tahun_bulan)
                                                            <li>
                                                                {{ $item_barang_tahun_bulan->jumlah . ' ' . $item_barang_tahun_bulan->satuan }}
                                                            </li>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach ($item_barang->barang_tahun_bulan as $item_barang_tahun_bulan)
                                                            <a
                                                                href="barang_tahun_bulan-edit/{{ $item_barang_tahun_bulan->id }}">
                                                                <i class="fa-solid fa-pen-to-square text-primary"></i>
                                                            </a>
                                                            <span class="px-1">|</span>
                                                            <a href="#"
                                                                onclick="hapus('{{ $item_barang_tahun_bulan->id }}','barang_tahun_bulan')">
                                                                <i class="fa-regular fa-trash-can text-danger"></i>
                                                            </a>
                                                            <br>
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>


                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

@endsection
