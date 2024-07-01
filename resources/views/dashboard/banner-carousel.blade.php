{{-- desktop --}}
<div class="d-none d-lg-block">
    <div id="carouselExampleControls" class="carousel slide pt-3" data-bs-ride="carousel">
        <div class="carousel-inner">
            @for ($i = 0; $i < 3; $i++)
                <div class="carousel-item @if($i == 0) active @endif bg-dark" style="height: 200px">
                    {{-- Image Ratio 763 x 260 --}}
                    <img src="{{ asset('images/banner/default-banner.png') }}" class="img-fluid d-block mx-auto w-100" style="max-height: 200px" alt="...">
                </div>
            @endfor
        </div>
    
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        </button>
    </div>
</div>

{{-- Ipad / tab --}}
<div class="d-none d-md-block d-lg-none container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @for ($i = 0; $i < 3; $i++)
                <div class="carousel-item @if($i == 0) active @endif">
                    <img src="{{ asset('images/banner/default-banner.png') }}" class="img-fluid d-block mx-auto w-100"  style="border-radius: 20px" alt="...">
                </div>
            @endfor
        </div>
    
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        </button>
    </div>
</div>

{{-- mobile --}}
<div class="d-lg-none d-xl-none d-md-none">
    <div id="carouselExampleControls" class="carousel slide p-3" data-bs-ride="carousel">
        <div class="carousel-inner">
            @for ($i = 0; $i < 3; $i++)
                <div class="carousel-item active">
                    <img src="{{ asset('images/banner/default-banner.png') }}" class="img-fluid d-block mx-auto w-100"  style="border-radius: 20px" alt="...">
                </div>
            @endfor
        </div>
    
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        </button>
    </div>
</div>
