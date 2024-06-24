@extends('layouts.navbar')
@section('content')

<div class="d-flex justify-content-between">
    <div class="col-xxl-2 col-xl-2">
        @include('layouts.sidebar')
    </div>
    <div class="container-fluid col-xxl-10 col-xl-10">
        <div class="mt-2">
            <div class="row d-flex justify-content-around">
                {{-- kiri --}}
                <div class="col-4">
                    <div class="p-4 card card-dark my-2 rounded-4 text-light text-center bg-dark-secondary">
                        <div class="card-body bg-warning rounded-3">
                            <h4 class="card-title fw-bold">Menunggu Pembayaran</h4>
                        </div>
                        <div>
                            <small class="text-muted">Selesaikan pembayaran sebelum waktu di bawah ini</small>
                            <p class="fs-5 fw-bold">{{ date('d F Y (H:i A)', strtotime(now())) }}</p>
                            <small class="text-muted">menggunakan layanan</small>
                        </div>
    
                        <div class="container border border-warning rounded-3">
                            <div class="d-flex text-start align-items-center row">
                                <div class="col-2">
                                    <img src="{{ asset('images/payments/qris.png') }}" width="50" alt="">
                                </div>
                                <div class="col-10">
                                    <small class="fw-bold">Scan QRIS</small><br>
                                    <small>Shopee Pay, OVO, DANA, Gopay, LinkAja, dan transfer bank via QRIS</small>
                                </div>
                            </div>
                        </div>
    
                        <div class="mt-3">
                            <img src="{{ asset('images/payments/qr-code.jpg') }}" class="w-100 rounded-2" alt="">
                        </div>
                    </div>
                </div>
    
                {{-- kanan --}}
                <div class="col-8">
                    <div class="card p-4 my-2 rounded-4 bg-dark-secondary">
                        <div class="row">
                            <div class="col-3">
                                <p>Tanggal Pembelian: <br><small class="fw-bold text-yellow"> 17/06/2024, 22:51:41</small></p>
                            </div>
                            <div class="col-5">
                                <p>Nomor Pesanan: <br><small class="fw-bold text-yellow"> CSA456498486SADSQW32TSSFDS</small></p>
                            </div>
                            <div class="col-4">
                                <p>Metode Pembayaran: <br><small class="fw-bold text-yellow"> QRIS</small></p>
                            </div>
                        </div>
    
                        <div class="d-flex align-items-center">
                            <div>
                                <img src="{{ asset('images/product/mole-crop.png') }}" class="rounded-4" width="100" alt="">
                            </div>
                            <div class="mx-2">
                                <h4 class="fw-bold">Diamond Mobile Legends <br><small class="fw-normal">Moonton</small></h4>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <p class="fw-bold h4">Detail</p>
                            <div class="row">
                                <div class="col-4">
                                    Top up
                                </div>
                                <div class="col-8 text-yellow">
                                    250 Diamonds
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <p class="fw-bold">Total Pembayaran</p>
                            </div>
                            <div class="col-8">
                                <p class="fw-bold text-yellow">Rp 50.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 rounded-4 my-4 bg-dark-secondary">
                        <p class="my-auto">Butuh Bantuan? <a href="https://wa.me/+6281380219688?text=Halo! Boleh bantu saya?" target="_blank" class="fw-bold text-light text-decoration-none fs-5">Hubungi Kami</a></p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

@endsection