@extends('layouts.master')
@section('title', 'SPK | Set')
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
                                {{-- <a href="/perhitungan-config"> --}}
                                <h5 class="m-b-10">Perhitungan</h5>
                                {{-- </a> --}}
                            </div>
                            <div class="page-header-title">
                                <a href="/perhitungan-terms">
                                    <h5 class="m-b-10">Terms</h5>
                                </a>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">Hasil</li>
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
                            <h3 class="fw-bold">Hasil Perhitungan TREND MOMENT</h5>
                        </div>
                        <div class="card-body">
                            {{-- <div class="bd-example"> --}}
                            <p class="h3 mb-0"> Berdasarkan analisis metode <span class="text-primary fw-bold">Trend Moment
                                </span>yang dilakukan,
                                sistem meramalkan bahwa barang <span
                                    class="text-primary fw-bold">{{ $barang_terpilih->nama }}</span>
                                akan mengalami pembelian
                                sekitar
                                <span class="text-primary fw-bold">{{ round(last($ramalan_penjualan['trend'])) }}
                                </span>
                                unit pada bulan ke-<span class="text-primary fw-bold">{{ $bulan_ke_n }}</span>,<br>
                                Didasarkan pada pola historis pengamatan bulanan yang khususnya melalui pengamatan
                                penjualan setiap bulan selama

                                <span class="text-primary fw-bold">
                                    {{ $n_bulan_prediksi }}
                                </span>
                                bulan terakhir
                                (
                                @if ($term == 'st')
                                    <span class="text-success fw-bold">
                                        Short Term
                                    </span>
                                @elseif($term == 'mt')
                                    <span class="text-warning fw-bold">
                                        Mid Term
                                    </span>
                                @else
                                    <span class="text-danger fw-bold">
                                        Long Term </span>
                                @endif
                                )
                                dengan evaluasi penjualan pada bulan terakhir (ke-<span
                                    class="text-primary fw-bold">{{ $bulan_ke_n - 1 }}</span>) adalah : <br>
                                <li class="h4 mt-2">
                                    <span class="text-primary fw-bold">Prediksi
                                    </span>
                                    <span class="fw-bold"> : {{ round($ramalan_penjualan['trend'][$n_bulan_prediksi - 1]) }}
                                    </span>
                                </li>
                                <li class="h4">
                                    <span class="text-primary fw-bold">MAD
                                    </span>
                                    <span class="fw-bold"> : {{ last($ramalan_penjualan['MAD']) }} </span>
                                </li>
                                <li class="h4">
                                    <span class="text-primary fw-bold">MSE
                                    </span>
                                    <span class="fw-bold"> : {{ last($ramalan_penjualan['MSE']) }}
                                    </span>
                                </li>
                                <li class="h4">
                                    <span class="text-primary fw-bold">MAPE
                                    </span>
                                    <span class="fw-bold"> : {{ last($ramalan_penjualan['MAPE']) }}
                                    </span>
                                </li>


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
