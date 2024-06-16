@extends('layouts.navbar')
@section('content')

<div>
    <div class="bg"></div>

    <div class="d-flex justify-content-center">
        {{-- sidebar on XXL --}}
        <div class="d-none d-lg-block col-xxl-2">
            <div class="d-lg-block px-2 mt-3 sticky-top sticky-offset">
                <div class="bg-dark rounded-5 overflow-auto">
                    <div class="p-4" style="background-color: #1f2943">
                        <h6 class="fw-bold">MENU</h6>
                        <div class="hover-card-yellow rounded-3 p-2">
                            <a href="#" class="mx-1 text-decoration-none"><i class="fa-solid fa-house mx-2"></i> Beranda</a><br>
                        </div>
                        <div class="hover-card-yellow rounded-3 p-2">
                            <a href="#" class="mx-1 text-decoration-none"><i class="fa-solid fa-gamepad mx-2"></i> Semua Game</a><br>
                        </div>
                        <div class="hover-card-yellow rounded-3 p-2">
                            <a href="#" class="mx-1 text-decoration-none"><i class="fa-solid fa-magnifying-glass mx-2"></i> Cek Transaksi</a><br>
                        </div>
                        <h6 class="mt-2 fw-bold">NAVIGASI</h6>
                        <div class="hover-card-yellow rounded-3 p-2">
                            <a href="#" class="mx-1 text-decoration-none"><i class="fa-solid fa-list mx-2"></i> Daftar Transaksi</a><br>
                        </div>      
                        <div class="hover-card-yellow rounded-3 p-2">
                            <a href="#" class="mx-1 text-decoration-none"><i class="fa-solid fa-question mx-2"></i> FAQ</a><br>
                        </div>
                        <div class="hover-card-yellow rounded-3 p-2">
                            <a href="#" class="mx-1 text-decoration-none"><i class="fa-solid fa-phone mx-2"></i> Hubungi Kami</a><br>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- content --}}
        <div class="col-xxl-10 col-md-12">
            @include('dashboard.banner-carousel')
        
            <!-- Nav tabs -->
            <div class="container mt-4 mb-2">
                <div class="d-flex">
                    <div class="nav" id="myTab" role="tablist">
                        <button type="button" id="category" class="active  mx-2 btn btn-transparent shadow-lg rounded-pill" data-bs-toggle="tab" data-bs-target="#top-up"  role="tab" aria-controls="top-up" aria-selected="true">
                            TOP UP
                        </button>
                        <button type="button" id="category" class="mx-2 btn btn-transparent shadow-lg rounded-pill" data-bs-toggle="tab" data-bs-target="#buy-account"  role="tab" aria-controls="buy-account">
                            BELI AKUN
                        </button>
                    </div>
                </div>
            </div>
        
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade active show" id="top-up" role="tabpanel" aria-labelledby="top-up-tab" tabindex="0">@include('dashboard.top-up')</div>
                <div class="tab-pane fade" id="buy-account" role="tabpanel" aria-labelledby="buy-account-tab" tabindex="0">@include('dashboard.buy-account')</div>
            </div>
    
        </div>
    </div>

</div>
@endsection
