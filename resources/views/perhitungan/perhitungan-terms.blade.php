@extends('layouts.master')
@section('title', 'SPK | Terms')
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
                                {{-- <a href="/barang_tahun_bulan"> --}}
                                <h5 class="m-b-10">Perhitungan</h5>
                                {{-- </a> --}}
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">Terms</li>
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
                            <h5>Atur Terms</h5>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-3">
                                    <label for="barang_id_terms" class="form-label">Pilih barang yang akan di
                                        prediksi</label>
                                    <select class="form-select @error('barang_id_terms') is-invalid @enderror"
                                        aria-label="Default select example" name="barang_id_terms" id="barang_id_terms">
                                        <option selected disabled>Pilih Barang ...</option>
                                        @foreach ($barang as $item_barang)
                                            <option value="{{ $item_barang->id }}"
                                                {{ old('barang_id_terms') == $item_barang->id ? 'selected' : '' }}>
                                                {{ $item_barang->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('barang_id_terms')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div id="terms_note" class="fw-bold col-lg-6 col-md-12">
                                </div>
                            </div>
                            <div class="row">


                                <a href="#" id="st" class="terms col-xl-4 col-md-12">
                                    <div class="st card bg-green-600 dashnum-card text-white overflow-hidden">
                                        <span class="round small"></span>
                                        <span class="round big"></span>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avtar avtar-lg">
                                                        <i class="fa-solid fa-triangle-exclamation"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <span id="term_title" class="text-white d-block f-18 f-w-500 my-2">Short Term
                                                {{-- <i class="fa-solid fa-caret-right px-3"></i> --}}
                                                <i class="fa-solid fa-turn-down px-3"></i>
                                                <br><span id="st_val">
                                                </span>
                                            </span>

                                            {{-- <p class="mb-0 opacity-50"></p> --}}
                                        </div>
                                    </div>
                                </a>

                                <a href="#" id="mt" class="terms col-xl-4 col-md-12">
                                    <div class="mt card bg-yellow-600 dashnum-card text-white overflow-hidden">
                                        <span class="round small"></span>
                                        <span class="round big"></span>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avtar avtar-lg"><i class="fa-solid fa-circle-radiation"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <span id="term_title" class="text-white d-block f-18 f-w-500 my-2">Mid Term
                                                {{-- <i class="fa-solid fa-caret-right px-3"></i> --}}
                                                <i class="fa-solid fa-turn-down px-3"></i>
                                                <br><span id="mt_val"></span>
                                            </span>

                                            {{-- <p class="mb-0 opacity-50"></p> --}}
                                        </div>
                                    </div>
                                </a>
                                <a href="#" id="lt" class="terms col-xl-4 col-md-12">
                                    <div class="lt card bg-red-600 dashnum-card text-white overflow-hidden">
                                        <span class="round small"></span>
                                        <span class="round big"></span>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="avtar avtar-lg">
                                                        <i class="fa-solid fa-biohazard"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <span id="term_title" class="text-white d-block f-18 f-w-500 my-2">Long Term
                                                {{-- <i class="fa-solid fa-caret-right px-3"></i> --}}
                                                <i class="fa-solid fa-turn-down px-3"></i>
                                                <br><span id="lt_val"></span>
                                            </span>
                                            {{-- <p class="mb-0 opacity-50"></p> --}}
                                        </div>
                                    </div>
                                </a>
                            </div>

                            {{-- <button type="submit" class="btn btn-primary me-2">Simpan</button><a href="/barang_tahun_bulan"
                                class="btn btn-outline-danger">Batal</a> --}}

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
    <style>
        /* Add this style to disable the link */
        .disabled {
            pointer-events: none;
            cursor: not-allowed;
            opacity: 0.6;
            /* Optional: To visually indicate the disabled state */
        }
    </style>
    <script>
        $('#barang_id_terms').change(function() {
            var selectedValue = $(this).val();
            var selectedText = $(this).find(':selected').text();
            var tahun = '{{ count($tahun) }}'

            $.ajax({
                url: '/barang-request_terms/' + selectedValue, // URL to the API endpoint
                method: 'GET', // HTTP method (GET, POST, etc.)
                dataType: 'json', // The type of data expected from the server
                success: function(data) {
                    parseInt(data)

                    if (data > 12) {

                        $('#st').removeClass('disabled')
                        $('#mt').removeClass('disabled')
                        $('#lt').removeClass('disabled')

                        $('#st_val').text('Data ' + Math.round(data / tahun) +
                            ' bulan terakhir')
                        $('#mt_val').text('Data ' + Math.round(data / 2) +
                            ' bulan terakhir')
                        $('#lt_val').text('Semua data (' + Math.round(data) + ') bulan')

                        data = Math.round(data) + 1
                        $('#terms_note').text('Hasil prediksi barang (' +
                            selectedText +
                            ') adalah untuk bulan ke - ' + (data)).removeClass(
                            'alert alert-danger text-center d-flex align-items-center').removeClass(
                            'alert alert-warning text-center d-flex align-items-center').addClass(
                            'alert alert-success text-center d-flex align-items-center')
                    } else if (data > 2 && data < 12) {
                        data = Math.round(data)

                        $('#st').addClass('disabled')
                        $('#mt').addClass('disabled')
                        $('#lt').removeClass('disabled')

                        $('#st_val').text('')
                        $('#mt_val').text('')
                        $('#lt_val').text('Semua data (' + Math.round(data) + ') bulan')

                        data = Math.round(data) + 1
                        $('#terms_note').text(
                                'Hasil prediksi barang (' + selectedText +
                                ') adalah untuk bulan ke - ' + (data) +
                                ', Short Term dan Mid Term tidak dapat dilakukan karena stok barang per bulan kurang dari setahun'
                            ).removeClass(
                                'alert alert-success text-center d-flex align-items-center')
                            .removeClass(
                                'alert alert-danger text-center d-flex align-items-center').addClass(
                                'alert alert-warning text-center d-flex align-items-center')
                    } else {
                        data = Math.round(data)

                        $('#st').addClass('disabled')
                        $('#mt').addClass('disabled')
                        $('#lt').addClass('disabled')

                        $('#st_val').text('')
                        $('#mt_val').text('')
                        $('#lt_val').text('')

                        data = Math.round(data) + 1
                        $('#terms_note').text(
                                'Hasil prediksi barang (' + selectedText +
                                ') tidak dapat dilakukan karena belum ada stok barang atau stok barang kurang dari 2 bulan'
                                ).removeClass(
                                'alert alert-success text-center d-flex align-items-center')
                            .removeClass(
                                'alert alert-warning text-center d-flex align-items-center').addClass(
                                'alert alert-danger text-center d-flex align-items-center')
                    }



                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Callback function for an unsuccessful request
                    console.error('AJAX Error: ' + textStatus, errorThrown);
                }
            });
        });

        $('.terms').click(function(event) {
            var selectedId = $(this).attr('id')
            var selectedBarangId = $('#barang_id_terms').val()
            event.preventDefault()

            if (selectedBarangId == null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Barang harus dipilih!'
                    // timer: 3000
                })
            } else {
                window.location.replace('/perhitungan-set/' + selectedBarangId + '/' +
                    selectedId);
            }

        })
    </script>

    <!-- [ Main Content ] end -->
@endsection
