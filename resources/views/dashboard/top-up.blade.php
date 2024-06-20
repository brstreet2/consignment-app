<link rel="stylesheet" href="{{ asset('css/product.css') }}">

<div class="container">
    <div class="row g-2">
        @for ($i = 0; $i < 9; $i++)
            <div class="col-md-4 col-lg-3 col-xxl-2 col-4">
                <div class="card rounded-4 bg-dark hover-zoom" >
                    <img src="{{ asset('images/banner/mole-banner.jpg') }}" class=" rounded-4 hoverImage" style="max-height: 40dvh;" alt="banner">
                    <a href="{{ route('top-up.index') }}" class="text-light"> 
                        <div class="card-img-overlay text-center rounded-4 text-hover">
                            <p class="card-title fs-6 fw-bold mt-5">Mobile Legend Bang Bang</p>
                            <p class="card-text"><small>MOONTON</small></p>
                        </div>
                    </a>
                </div>
            </div>
        @endfor
    </div>
</div>