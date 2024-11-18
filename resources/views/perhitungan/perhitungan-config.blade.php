@extends('layouts.master')
@section('title', 'SPK | Konfigurasi')
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
                                    <h5 class="m-b-10">Konfigurasi</h5>
                                </a>
                            </div>
                            {{-- <ul class="breadcrumb">
                                <li class="breadcrumb-item">Atur Konfigurasi</li>
                            </ul> --}}
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
                            <h5>Atur Konfigurasi</h5>
                        </div>
                        <div class="card-body">
                            {{-- <div class="bd-example"> --}}
                            <form action="/perhitungan-set" method="post">
                                @csrf
                                <div class="row">




                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="tahun_id" class="form-label">Tahun yang akan dihitung</label>
                                            <select class="form-select @error('tahun_id') is-invalid @enderror"
                                                aria-label="Default select example" name="tahun_id" id="tahun_id">
                                                <option selected disabled>Pilih Tahun ...</option>
                                                @foreach ($tahun as $item_tahun)
                                                    @php
                                                        $isSelected = old('tahun_id') !== null && old('tahun_id') == $item_tahun->id;
                                                    @endphp
                                                    <option value="{{ $item_tahun->id }}"
                                                        @if ($isSelected) selected @endif>
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
                                            <label for="barang_id" class="form-label">Barang Prediksi</label>
                                            <select class="form-select @error('barang_id') is-invalid @enderror"
                                                aria-label="Default select example" name="barang_id" id="barang_id">
                                                <option selected disabled>Pilih Barang ...</option>
                                                @foreach ($barang as $item_barang)
                                                    @php
                                                        $isSelected = old('barang_id') !== null && old('barang_id') == $item_barang->id;
                                                    @endphp
                                                    <option value="{{ $item_barang->id }}"
                                                        @if ($isSelected) selected @endif>
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
                                            <label for="konversi_satuan" class="form-label">Konversi satuan</label>
                                            <select class="form-select @error('konversi_satuan') is-invalid @enderror"
                                                aria-label="Default select example" name="konversi_satuan"
                                                id="konversi_satuan">
                                                <option selected disabled>Pilih Satuan ...</option>
                                                @foreach ($satuan as $item_satuan)
                                                    @php
                                                        $isSelected = old('konversi_satuan') !== null && old('konversi_satuan') == $item_satuan;
                                                    @endphp
                                                    <option value="{{ $item_satuan }}"
                                                        @if ($isSelected) selected @endif>
                                                        {{ $item_satuan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('konversi_satuan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="form-text">Semua satuan barang akan dikonversi ke
                                                satuan
                                                yang dipilih.
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-primary fw-bold">Pilih bulan yang akan dihitung</span>
                                    <hr>
                                    @error('bulan_null')
                                        <div class="col-lg-12">
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        </div>
                                    @enderror
                                    @error('barang_null')
                                        <div class="col-lg-12">
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        </div>
                                    @enderror

                                    @foreach ($bulan as $item_bulan)
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="bulan[{{ $item_bulan->id }}]"
                                                    class="form-label">{{ $item_bulan->nama }}</label>
                                                <select
                                                    class="form-select @error('bulan[' . $item_bulan->id . ']') is-invalid @enderror"
                                                    aria-label="Default select example" name="bulan[{{ $item_bulan->id }}]"
                                                    id="bulan[{{ $item_bulan->id }}]">
                                                    {{-- <option selected disabled>Pilih salah satu ...</option> --}}
                                                    @php
                                                        $selectedValue = old('bulan.' . $item_bulan->id);
                                                    @endphp
                                                    @foreach ($bool_objects as $item_bool)
                                                        <option value="{{ $item_bool->value }}"
                                                            @if ($selectedValue !== null && $selectedValue == $item_bool->value) selected @endif>
                                                            {{ $item_bool->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('bulan[' . $item_bulan->id . ']')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    @endforeach
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
