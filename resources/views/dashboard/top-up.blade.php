<link rel="stylesheet" href="{{ asset('css/product.css') }}">

<div class="container">
    <div class="row g-3">
        @for ($i = 0; $i < 9; $i++)
            @if ($i % 2)
                <div class="col-md-4 col-lg-3 col-xxl-2 col-4 ">
                    <div class="card border-radius">
                        <img src="{{ asset('images/banner/pubg-banner.jpg') }}" class="img-fluid border-radius" alt="banner">
                        <div class="card-img-overlay " >
                            <h5 class="card-title">Player Unkown Battleground</h5>
                            <p class="card-text"><small>KRAFTON</small></p>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-4 col-lg-3 col-xxl-2 col-4">
                    <div class="card border-radius">
                        <img src="{{ asset('images/banner/mole-banner.jpg') }}" class="img-fluid border-radius" alt="banner">
                        <div class="card-img-overlay text-center">
                            <h5 class="card-title fs-6">Mobile Legends Bang Bang</h5>
                            <p class="card-text"><small>MOONTON</small></p>
                        </div>
                    </div>
                </div>
            @endif
        @endfor
    </div>
</div>
