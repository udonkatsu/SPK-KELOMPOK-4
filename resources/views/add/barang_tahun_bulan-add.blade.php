@extends('layouts.master')
@section('title', 'SPK | Tambah Relasi')
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
                                <a href="/barang_tahun_bulan">
                                    <h5 class="m-b-10">Relasi</h5>
                                </a>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">Tambah Relasi</li>
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
                        <div class="card-header">
                            <h5>Tambah Relasi</h5>
                        </div>
                        <div class="card-body">
                            {{-- <div class="bd-example"> --}}
                            <form action="/barang_tahun_bulan-store" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="barang_id" class="form-label">Barang</label>
                                            <select class="form-select @error('barang_id') is-invalid @enderror"
                                                aria-label="Default select example" name="barang_id" id="barang_id">
                                                <option selected disabled>Pilih Barang ...</option>
                                                @foreach ($barang as $item_barang)
                                                    <option value="{{ $item_barang->id }}"
                                                        {{ old('barang_id') == $item_barang->id ? 'selected' : '' }}>
                                                        {{ $item_barang->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('barang_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="satuan" class="form-label">Satuan</label>
                                            <select class="form-select @error('satuan') is-invalid @enderror"
                                                aria-label="Default select example" name="satuan" id="satuan">
                                                <option selected disabled>Pilih Satuan ...</option>
                                                @foreach ($satuan as $item_satuan)
                                                    <option value="{{ $item_satuan }}"
                                                        {{ old('satuan') == $item_satuan ? 'selected' : '' }}>
                                                        {{ $item_satuan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('satuan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="tahun_id" class="form-label">Tahun</label>
                                            <select class="form-select @error('tahun_id') is-invalid @enderror"
                                                aria-label="Default select example" name="tahun_id" id="tahun_id">
                                                <option selected disabled>Pilih Tahun ...</option>
                                                @foreach ($tahun as $item_tahun)
                                                    <option value="{{ $item_tahun->id }}"
                                                        {{ old('tahun_id') == $item_tahun->id ? 'selected' : '' }}>
                                                        {{ $item_tahun->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('tahun_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="bulan_id" class="form-label">Bulan</label>
                                            <select class="form-select @error('bulan_id') is-invalid @enderror"
                                                aria-label="Default select example" name="bulan_id" id="bulan_id">
                                                <option selected disabled>Pilih Bulan ...</option>
                                                @foreach ($bulan as $item_bulan)
                                                    <option value="{{ $item_bulan->id }}"
                                                        {{ old('bulan_id') == $item_bulan->id ? 'selected' : '' }}>
                                                        {{ $item_bulan->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('bulan_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="jumlah" class="form-label">Jumlah</label>
                                            <input type="text" class="form-control @error('jumlah') is-invalid @enderror"
                                                id="jumlah" name="jumlah" value="{{ old('jumlah') }}"
                                                placeholder="...">
                                            @error('jumlah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary me-2">Simpan</button><a
                                    href="/barang_tahun_bulan" class="btn btn-outline-danger">Batal</a>
                            </form>
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
