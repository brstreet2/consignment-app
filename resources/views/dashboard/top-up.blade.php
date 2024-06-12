<link rel="stylesheet" href="{{ asset('css/product.css') }}">

<div class="container">
    <div class="row g-3">
        @for ($i = 0; $i < 9; $i++)
            <div class="col-md-4 col-lg-3 col-xxl-2 col-4 ">
                <div class="card border-radius hover-zoom">
                    <img src="{{ asset('images/banner/pubg-banner.jpg') }}" class="img-fluid border-radius" alt="banner">
                    <a href="#top-up" class="text-light"> 
                        <div class="card-img-overlay text-center bg-semi-transparent justify-content-end rounded-0 text-hover">
                            <h5 class="card-title fs-6 fw-bold">Player Unkown BattleGround</h5>
                            <p class="card-text"><small>KRAFTON</small></p>
                        </div>
                    </a>
                </div>
            </div>
        @endfor
    </div>
</div>
