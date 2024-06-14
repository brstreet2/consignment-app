@extends('layouts.navbar')
@section('content')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">

{{-- desktop --}}
<div class="d-none d-lg-block">
    <div class="container mt-5 mb-5">

        <div class="bg-banner">
            {{-- Image Ratio 763 x 260 --}}
            <img src="{{ asset('images/detail-banner/mole-bg-banner.png') }}" class="img-fluid d-block mx-auto w-100" alt="...">
            <img src="{{ asset('images/product/mole-crop.png') }}" class="img-fluid w-10" alt="">
        </div>


        <div class="row d-flex justify-content-around">
            <div class="col-8">
                {{-- kiri atas --}}
                <div class="card card-dark my-2 p-2 border-5">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Mobile Legends Bang Bang</h5>
                        <h6 class="card-subtitle text-muted">
                            Beli dan Top up Shifting Flower Aether Gazer harga paling murah dan proses instan di website Oogamerstore! 100% legal dan aman terpercaya!.
                            <br><br>
                            Top Up Aether Gazer sangat mudah, masukkan UserID akun Aether Gazer, pilih nominal Shifting Flower yang diinginkan, pilih metode pembayaran dan selesaikan pembayarannya
                            <br><br>
                            Top Up Aether Gazer bisa bayar menggunakan DANA, GoPay, OVO, LinkAja, Shopeepay, Bank Transfer, QRIS, Virtual Akun, Indomaret, Alfamart, Alfamidi, Dll.
                            <br><br>
                            Download dan mainkan Aether Gazer sekarang!
                        </h6>
                    </div>
                </div>

                {{-- kiri bawah --}}
                <div class="card card-dark my-4 p-2 border-5">
                    <div class="card-body">
                        <h5 class="card-title mb-4">1. Pilih Nominal</h5>
                        <h6 class="card-subtitle text-muted mb-3">
                            ⚡ Top Up Instant
                        </h6>
                        <div class="d-flex row g-4">
                            @for ($i = 0; $i < 6; $i++)
                                <div class="col-4">
                                    <a href="#" class="text-decoration-none text-light">
                                        <div class="card-body border-5 text-center" style="border: 1px solid rgb(120, 120, 120);">
                                            <div class="align-items-center">
                                                <img src="{{ asset('images/navbar/logo.png') }}" class="w-25" alt="">
                                                <p>50 Diamonds <br><small class="card-title fw-bold">Rp 10.000,-</small></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>

                <div class="card card-dark my-4 p-2 border-5">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Ulasan Produk</h5>
                        
                    </div>
                </div>
            </div>

            {{-- kanan --}}
            <div class="col-4">
                {{-- Informasi Akun --}}
                <div class="card p-2 my-2 border-5" style="background-color: #252f45e6">
                    <div class="card-body">
                        <h5 class="card-title">2. Informasi Akun</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <h6>UID</h6>
                        </div>
                        <div class="text-center">
                            {{-- <input type="search" class="col-12 search btn btn-outline-dark border-2 py-3 text-light card-darken text-start" placeholder="Mau top up apa hari ini?"> --}}
                            
                            <input type="text" class="form-control btn btn-outline-dark border-2 text-start py-3 card-darken" placeholder="Cth: 1234876509876">
                        </div>
                    </div>
                </div>

                {{-- Code Voucher --}}
                <div class="card p-2 my-4 border-5" style="background-color: #252f45e6">
                    <div class="card-body">
                        <h5 class="card-title">3. Voucher Promo</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <h6>Masukkan Kode</h6>
                        </div>
                        <div class="text-center">
                            <input type="search" class="form-control btn btn-outline-dark border-2 text-start py-3 card-darken" placeholder="Cth: KS2024****">
                            <button type="button" class="btn btn-warning mt-4 col-12">Cek Kode Promo</button>
                        </div>
                    </div>
                </div>
         
                {{-- Metode Pembayaran --}}
                <div class="card p-2 my-4 border-5" style="background-color: #252f45e6">
                    <div class="card-body">
                        <h5 class="card-title">4. Metode Pembayaran</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <h6>Masukkan Kode</h6>
                        </div>
                        <div class="text-center">
                            <input type="search" class="form-control btn btn-outline-dark border-2 text-start py-3 card-darken" placeholder="Cth: KS2024****">
                            <button type="button" class="btn btn-warning mt-4 col-12">Cek Kode Promo</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        

    </div>
</div>

<footer>
    <br>
    <br>
    <br>
</footer>

@endsection