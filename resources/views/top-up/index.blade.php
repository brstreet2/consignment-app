@extends('layouts.navbar')
@section('content')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/payment-method.scss') }}"> --}}

{{-- desktop --}}
<div class="d-none d-lg-block">
    <div class="container mt-5 mb-5">

        <div class="bg-banner">
            {{-- Image Ratio 763 x 260 --}}
            <img src="{{ asset('images/detail-banner/mole-bg-banner.png') }}" class="img-fluid d-block mx-auto w-100" alt="...">
            <img src="{{ asset('images/product/mole-crop.png') }}" class="img-fluid w-10" alt="">
        </div>


        <div class="row d-flex justify-content-around">
            {{-- kiri --}}
            <div class="col-8">
                <div class="card card-dark my-2 p-2 rounded-5">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Mobile Legends Bang Bang</h5>
                        <h6 class="card-subtitle text-muted">
                            Beli dan Top up Diamonds Mobile Legends Bang Bang dengan harga paling murah dan proses instan di website KalemStore! 100% legal dan aman terpercaya!.
                            <br><br>
                            Top Up Mobile Legends sangat mudah, masukkan UserID akun Mobile Legends, pilih nominal Diamonds yang diinginkan, pilih metode pembayaran dan selesaikan pembayarannya
                            <br><br>
                            Top Up Mobile Legends bisa bayar menggunakan Shopeepay, Bank Transfer, QRIS.
                            <br><br>
                            Download dan mainkan Mobile Legends sekarang!
                        </h6>
                    </div>
                </div>

                <div class="card card-dark my-4 p-2 rounded-5">
                    <div class="card-body">
                        <h5 class="card-title mb-4">1. Pilih Nominal <label class="text-danger">*</label></h5>
                        <h6 class="card-subtitle text-muted mb-3">
                            ⚡ Top Up Instant
                        </h6>
                        <div class="d-flex row g-4">
                            @for ($i = 0; $i < 6; $i++)
                                <div class="col-4">
                                    <a href="#" class="text-decoration-none text-light">
                                        <div class="card-body rounded-5 text-center" style="border: 1px solid rgb(120, 120, 120);">
                                            <div class="align-items-center">
                                                <img src="{{ asset('images/logo-cash/diamonds-mole.png') }}" width="30" alt="">
                                                <p>50 Diamonds <br><small class="card-title fw-bold">Rp 10.000,-</small></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>

                <div class="card card-dark my-4 p-2 rounded-5">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Ulasan Produk</h5>
                        
                    </div>
                </div>
            </div>

            {{-- kanan --}}
            <div class="col-4">
                {{-- Informasi Akun --}}
                <div class="card p-2 my-2 rounded-5" style="background-color: #252f45e6">
                    <div class="card-body">
                        <h5 class="card-title">2. Informasi Akun <label class="text-danger">*</label></h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <h6>UID</h6>
                        </div>
                        <div class="text-center">
                            {{-- <input type="search" class="col-12 search btn btn-outline-dark rounded-2 py-3 text-light card-darken text-start" placeholder="Mau top up apa hari ini?"> --}}
                            
                            <input type="text" class="form-control btn btn-outline-dark rounded-2 text-start py-3 card-darken" placeholder="Cth: 1234876509876">
                        </div>
                    </div>
                </div>

                {{-- Code Voucher --}}
                <div class="card p-2 my-4 rounded-5" style="background-color: #252f45e6">
                    <div class="card-body">
                        <h5 class="card-title">3. Voucher Promo</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <h6>Masukkan Kode</h6>
                        </div>
                        <div class="text-center">
                            <input type="search" class="form-control btn btn-outline-dark rounded-2 text-start py-3 card-darken" placeholder="Cth: KS2024****">
                            <button type="button" class="btn btn-warning mt-4 col-12">Cek Kode Promo</button>
                        </div>
                    </div>
                </div>
         
                {{-- Metode Pembayaran --}}
                <div class="card p-2 my-4 rounded-5" style="background-color: #252f45e6">
                    <div class="card-body">
                        <h5 class="card-title">4. Metode Pembayaran <label class="text-danger">*</label></h5>
                    </div>
                    <div class="card-body">
                        <div class="accordion accordion-flush" id="accordionFlushExample">

                            <div class="accordion-item mb-2" id="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" id="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    E-Money
                                    </button>
                                </h2>
                                
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="m-3">
                                        <button class="btn btn-dark col-12 py-2 rounded-3 bg-primary">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment-method" id="QRIS">
                                                <div class="d-flex justify-content-between">
                                                    <label class="form-check-label text-light fw-bold" for="QRIS">
                                                        QRIS
                                                    </label>
                                                    <img src="{{ asset('images/payments/qris.png') }}" width="60" alt="">
                                                </div>
                                            </div>
                                        </button>
                                    </div>

                                    <div class="m-3">
                                        <button class="btn btn-dark col-12 py-2 rounded-3 bg-light" for="ShopeePay">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment-method" id="ShopeePay">
                                                <div class="d-flex justify-content-between">
                                                    <label class="form-check-label text-danger" for="ShopeePay">
                                                        ShopeePay
                                                    </label>
                                                    <img src="{{ asset('images/payments/spay.png') }}" width="60" alt="">
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-2" id="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" id="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Virtual Account
                                    </button>
                                </h2>
                                
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="m-3">
                                        <button class="btn btn-dark col-12 py-2 rounded-3 bg-primary">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment-method" id="BCA">
                                                <div class="d-flex justify-content-between">
                                                    <label class="form-check-label text-light fw-bold" for="BCA">
                                                        BCA
                                                    </label>
                                                    <img src="{{ asset('images/payments/bca.png') }}" width="60" alt="">
                                                </div>
                                            </div>
                                        </button>
                                    </div>

                                    <div class="m-3">
                                        <button class="btn btn-dark col-12 py-2 rounded-3 bg-light" for="ShopeePay">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment-method" id="ShopeePay">
                                                <div class="d-flex justify-content-between">
                                                    <label class="form-check-label text-danger" for="ShopeePay">
                                                        ShopeePay
                                                    </label>
                                                    <img src="{{ asset('images/payments/spay.png') }}" width="60" alt="">
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- STARTjangan dihapus --}}
                            <div>
                            </div>
                            {{-- END jangan dihapus --}}
                        </div>
                    </div>
                </div>

                {{-- Notifikasi Info --}}
                <div class="card p-2 my-2 rounded-5" style="background-color: #252f45e6">
                    <div class="card-body">
                        <h5 class="card-title">5. Notifikasi Info</h5>
                    </div>
                    <div class="card-body">                   
                        <input type="email" class="form-control btn btn-outline-dark rounded-2 text-start py-3 card-darken" placeholder="Cth: kalem@store.com">
                        <small>*Status transaksi dikirimkan via email (Optional)</small>
                    </div>
                </div>

                {{-- SEND Button --}}
                <div class="card my-3 rounded-5 bg-transparent">
                    <button class="btn btn-warning py-3">~~~~ Konfirmasi Pesanan ~~~~</button>
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