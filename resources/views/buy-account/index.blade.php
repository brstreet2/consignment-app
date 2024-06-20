@extends('layouts.navbar')
@section('content')

<div class="container">
    <div class="d-flex">
        <div class="col-8 p-4">
            <div class="d-flex">
                <div id="carouselBanner" class="carousel slide col-6 ">
                    <div class="carousel-inner">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="carousel-item active">
                                <img src="{{ asset('images/detail-banner/mole-bg-banner.png') }}" class="d-block w-100 rounded-1" alt="{{ asset('images/detail-banner/mole-bg-banner.png') }}">
                            </div>
                        @endfor
                    </div>
                    <div class="mt-4 col-12">
                        @for ($i = 0; $i < 5; $i++)
                            <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="{{ $i }}" class="active" aria-current="true" aria-label="Slide {{ $i }}"><img src="{{ asset('images/detail-banner/mole-bg-banner.png') }}" alt="" width="58px" height="58px"></button>
                        @endfor
                    </div>
                </div>
                <div class="col-6 p-4">
                    <div class="d-flex justify-content-between">
                        <div class="col-10">
                            <p class="h4 fw-bold">Rank Mythical Glory </p>
                        </div>
                        <div class="col-2 text-center d-flex justify-content-between">
                            <i class="bi bi-share h4"></i>
                            <i class="bi bi-star h4"></i>
                        </div>
                    </div>
        
                    <div>
                        <p class="text-muted">Mobile Legends (Moonton)</p>
                        <h1 class="text-yellow">Rp29.999</h1>
                    </div>
                    <div>
                        <span class="badge text-light" style="background-color: rgba(103, 207, 255, 0.708)">Anti Hackback</span>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h5>Cara Trading Akun Mobile Legends</h5>
            </div>
        </div>
        <div class="col-4 p-4">
            Informasi Pesanan
        </div>
    </div>
</div>

@endsection