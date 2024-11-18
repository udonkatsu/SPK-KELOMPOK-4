@extends('layouts.master')
@section('title', 'SPK | Tahun')
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
                                <h5 class="m-b-10"><a href="/tahun">Tahun</a></h5>
                            </div>
                            <ul class="breadcrumb">
                                {{-- <li class="breadcrumb-item"><a href="../navigation/index.html">Tahun</a></li> --}}
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
                            <h5>Tahun</h5>
                        </div>
                        <div class="card-body">
                            {{-- <div class="bd-example"> --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="/tahun-add" class="btn btn-sm bg-blue-100 mb-3">Tambah Tahun
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                    <table class="table table-hover" id="myTable">
                                        <thead class="bg-blue-100">
                                            <tr>
                                                <th>No</th>
                                                <th>Tahun</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tahun as $item_tahun)
                                                <tr>
                                                    <th>{{ $loop->iteration }}</th>
                                                    <td>{{ $item_tahun->nama }}</td>
                                                    <td>
                                                        <a href="tahun-edit/{{ $item_tahun->id }}">
                                                            <i class="fa-solid fa-pen-to-square text-primary"></i>
                                                        </a>
                                                        <span class="px-1">|</span>
                                                        <a href="#" onclick="hapus('{{ $item_tahun->id }}','tahun')">
                                                            <i class="fa-regular fa-trash-can text-danger"></i>
                                                        </a>
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
