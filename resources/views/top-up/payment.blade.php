@extends('layouts.navbar')
@section('content')

<div class="d-flex justify-content-between">
    <div class="col-xxl-2 col-xl-2">
        @include('layouts.sidebar')
    </div>
    <div class="container-fluid col-xxl-10 col-xl-10 bg-black">
        <div class="card my-3 border-dark">
            <div style="height: 100px" class="bg-dark">
                <img src="{{ asset('images/detail-banner/mole-bg-banner.png') }}" style="object-fit: cover; height: 100%; width: 100%" alt="">
            </div>

            <div class="bg-dark container pb-3">
                <div class="px-4 pt-4 d-flex justify-content-around">
                    <div class="col-md-7 my-auto">
                        <p class="h4 my-auto">KLMSTR123456MLBB</p>
                    </div>
                    <div class="col-md-5 my-auto">
                        <p class="text-end my-auto">Tanggal Transaksi: {{ date('d M Y H:i:s') }}</p>
                    </div>
                </div>
                <hr>

                <div class="d-flex px-4 pb-3">
                    <div class="col-md-4">
                        <div class="card text-center mx-1 skew-15 bg-yellow-darker">
                            <p class="p-3 my-auto"><i class="bi bi-cash h5 mx-1"></i>Pembayaran</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center mx-1 skew-15 bg-white-azure">
                            <p class="p-3 my-auto text-dark"><i class="bi bi-clock-history h5 mx-1"></i>Proses</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center mx-1 skew-15 bg-white-azure">
                            <p class="p-3 my-auto text-dark"><i class="fa-solid fa-circle-check mx-1"></i>Pesanan Selesai</p>
                        </div>
                    </div>

                    {{-- PAYMENT CANCELLED --}}
                    {{-- <div class="col-md-12">
                        <div class="card text-center mx-1 skew-15 bg-red">
                            <p class="p-3 my-auto text-light"><i class="bi bi-x-octagon-fill h4 mx-2"></i>Pesanan Dibatalkan</p>
                        </div>
                    </div> --}}
                </div>

                <div class="d-flex px-4 pb-4">
                    <div class="col-md-4">
                        <div class="d-flex">
                            <img src="{{ asset('images/product/mole-crop.png') }}" class="rounded-3" width="80px" height="80px" alt="">
                            <div class="m-2">
                                <p class="fs-4 my-auto">250 Diamonds</p>
                                <p class="text-muted">Mobile Legends</p>
                            </div>
                        </div>
                        <div class="d-flex px-3">
                            <div class="col-md-6">
                                <p class="text-start">Harga Layanan</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-end">Rp150.000</p>
                            </div>
                        </div>
                        <div class="d-flex px-3">
                            <div class="col-md-6">
                                <p class="text-start">Fee</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-end">Rp700</p>
                            </div>
                        </div>
                        <div class="d-flex px-3 text-yellow-dark">
                            <div class="col-md-6">
                                <p class="text-start">Total Bayar</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-end">Rp150.700</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 px-2">
                        <small>Mohon pastikan nominal yang kamu bayarkan sesuai dengan nominal <label class="text-yellow-dark">Total Bayar</label> ya guys!</small>

                        <div class="text-center mt-4">
                            <img src="{{ asset('images/payments/qr-code.jpg') }}" class="w-75" alt="">
                        </div>

                        {{-- PAYMENT CANCELLED --}}
                        {{-- <div class="text-center my-auto">
                            <img src="{{ asset('images/cancelled.png') }}" class="w-75" alt="">
                        </div> --}}
                    </div>

                    <div class="col-md-4">
                        <div class="d-flex">
                            <div class="col-5 bg-dark-secondary">
                                <p class="my-auto p-2">Data</p>
                            </div>
                            <div class="col-7 bg-light">
                                <p class="my-auto p-2 text-dark text-end">22080227|2026</p>
                            </div>
                        </div>
                        <div class="d-flex my-1">
                            <div class="col-5 bg-dark-secondary">
                                <p class="my-auto p-2">Info Pembeli</p>
                            </div>
                            <div class="col-7 bg-light">
                                <p class="my-auto p-2 text-dark text-end">agu******@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex my-1">
                            <div class="col-5 bg-dark-secondary">
                                <p class="my-auto p-2">Pembayaran</p>
                            </div>
                            <div class="col-7 bg-light text-end my-auto p-2">
                                <img src="{{ asset('images/payments/qris.png') }}" class=" w-50" alt="">
                            </div>
                        </div>
                        <div class="d-flex my-1">
                            <div class="col-5 bg-dark-secondary">
                                <p class="my-auto p-2">Status</p>
                            </div>
                            <div class="col-7 bg-light text-end my-auto p-2">
                                <button class="btn bg-warning text-light rounded-5">Belum Bayar</button>
                                {{-- <button class="btn bg-danger text-light rounded-5">Cancel</button>
                                <button class="btn bg-green text-light rounded-5">Pembelian Berhasil</button> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-black rounded-4 p-3">
                    <p class="my-auto">QRIS Mendukung Pembayaran Seperti OVO, DANA, SHOPEEPAY, BCA, dll. Screenshot dan Scan Kode Barcode Di atas Melalui Aplikasi Pembayaran tersebut untuk bayar.</p>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection