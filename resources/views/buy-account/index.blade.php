@extends('layouts.navbar')
@section('content')

<link rel="stylesheet" href="{{ asset('css/product.css') }}">

<div class="d-flex">
    <div class="col-xxl-2">
        @include('layouts.sidebar')
    </div>

    <div class="container-fluid col-xxl-10">
        <div class="d-flex">
            <div class="col-8 py-3">
                <div class="d-flex">
                    <div id="carouselBanner" class="carousel slide col-6 ">
                        <div class="carousel-inner">
                            @for ($i = 0; $i < 5; $i++)
                                <div class="carousel-item @if($i == 0) active @endif">
                                    <img src="{{ asset('images/banner/pubg-banner.jpg') }}" class="d-block w-100 rounded-4" width="370" height="184">
                                </div>
                            @endfor
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>

                        <div class="mt-2 d-flex justify-content-start row">
                            @for ($i = 0; $i < 5; $i++)
                                <div class="col-2 m-1">
                                    <img src="{{ asset('images/banner/pubg-banner.jpg') }}" class="rounded-4 img-fluid w-100 max-75px pointer" data-bs-target="#carouselBanner" data-bs-slide-to="{{ $i }}"  aria-current="true" aria-label="Slide {{ $i }}">
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="col-6 px-4">
                        <div class="d-flex justify-content-between">
                            <div class="col-10">
                                <p class="h4 fw-bold">PUBG mobile Akun Sultan</p>
                            </div>
                            <div class="col-2 text-center d-flex justify-content-between mx-2">
                                <i class="bi bi-share h4"></i>
                                <i class="bi bi-star h4"></i>
                            </div>
                        </div>
            
                        <div>
                            <p class="text-muted">Player Uknown BattleGround (KRAFTON)</p>
                            <h1 class="text-yellow">Rp970.000</h1>
                        </div>
                        <div>  
                            <span class="badge text-light bg-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Akun ini akan dikirimkan ke email kamu"><i class="bi bi-lightning-fill text-success"><small>Instant by Email</small></i></span>
                            <span class="badge text-light mx-3 bg-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Akun yang kamu beli terjamin aman">Anti Hackback</span>
                        </div>
                        <div class="card mt-4 d-flex align-items-center bg-success rounded-4">
                            <p class="text-light p-3 h4 fw-bold">
                                <i class="bi bi-check-circle-fill text-light"></i> Akun Masih Tersedia
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card p-3 rounded-4 bg-dark-secondary">
                        <p class="fw-bold h3">DETAIL</p>
                        <p class="text-light">
                            Detail akun: (level/UC/skin/rank)
                            <br><br>
                            AKUN OLD LEVEL 79 <br>
                            Mythic FASHION TITLE 79/300 <br>
                            TAKDIR ISTIMEWA TITLE <br>
                            - HELM PUNK INFERNO <br>
                            - OPEN ALL FACE - TWIN HAIR <br>
                            - SportCAR DODGE HORNET <br>
                            - SET: 330+ <br>
                            👕 X-SUITE BLOOD RAVEN ⭐⭐⭐⭐ <br>
                            👕 X-SUITE FIORE ⭐⭐⭐ <br>
                            👕 ULTIMATE Mythic FLAMEWRATH <br>
                            👕 ULTIMATE Mythic CRIMSON <br>
                            👕 ULTIMATE Mythic GLACIAL BRIDE <br>
                            👕 ULTIMATE Mythic THE FOOL'S DELIGHT <br>
                            👕 Mythic MUMMY YELLOW <br>
                            👕 FULLSET YUMA PMGC <br>
                            * 21 LAB: <br>
                            🔥 M4 LIZARD ROAR Lev7 MAXX <br>
                            🔥 UMP45 EVO MAXX <br>
                            🔥 DBS PANTHERA MAXX <br>
                            🔥 MACHETE Lev MAXX <br>
                            🔥 MG3 DRAGON Lev4 <br>
                            🔥 AMR CRIMSON Lev4 <br>
                            🔥 M249 RAMBO Lev4 <br>
                            🔥 AKM DRAGON Lev4 <br>
                            🔥 GROZA ARIA Lev4 <br>
                            🔥 UZI PHARAOH Lev4 <br>
                            🔥 DP-28 DRAGON Lev4 <br>
                            🔥 BERYL UNICORN Lev4 <br>
                            🔥 AWM FLAMEWAVE Lev4 <br>
                            🔥 AUG FORSAKEN GLACE Lev4 <br>
                            🔥 SCARL FOLLY'S CLASP Lev4 <br>
                            🔥 6 LAB Lev1-3 <br>
                            🔥 FREE 11 MATERIAL BIG <br>
                            <br><br>
                            Perangkat/device: Android & IOS
                            Login via: login single Google Play Games ( Ready Change )
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4 py-3 px-4">
                <div class="card bg-dark-secondary p-3 rounded-4">
                    <p class="fs-5 text-center fw-bold">Informasi Pesanan</p>
                    <form action="{{ route('product.payment') }}" method="get" class="">
                        @csrf

                        <div class="d-flex align-items-center">
                            <p class="fs-6 fw-bold">Game: </p>
                            <p class="mx-2 text-yellow fw-bold">PUBGm</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="fs-6 fw-bold">Produk: </p>
                            <p class="mx-2 text-yellow fw-bold">PUBGm Akun Sultan</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="fs-6 fw-bold">Harga: </p>
                            <p class="mx-2 text-yellow fw-bold">Rp970.000</p>
                        </div>

                        <label for="#email" data-bs-toggle="tooltip" data-bs-placement="top" title="Akun akan dikirimkan ke email di bawah ini">Email:</label>
                        <input type="email" name="email" id="email" class="form-control btn btn-outline-dark bg-dark text-light text-start py-2" placeholder="cth: kalem@store.com">
                        <label class="mt-3" for="#phone" data-bs-toggle="tooltip" data-bs-placement="top" title="Mempermudah kamu jika terjadi kendala pada pembelian">No. Handphone:</label>
                        <input type="number" name="phone" id="phone" class="form-control btn btn-outline-dark bg-dark text-light text-start py-2" placeholder="cth: 081234567890">

                        <button class="btn btn-warning mt-3 col-12 py-3">Beli Sekarang</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Initialize Tooltips -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    });
</script>

@endsection
