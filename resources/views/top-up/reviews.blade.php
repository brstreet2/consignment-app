<div class=" mt-4 p-2 rounded-5">
    <h5 class="card-title mb-4">Ulasan Produk</h5>
    {{-- <div class="row"> --}}
        <div class="d-flex">
            <div class="card rounded-4">
                <p class="h1 text-yellow p-3 my-1">4.9</p>
            </div>
            <div class="align-items-center my-auto mx-3">
                <div id="stars">
                    <i class="bi bi-star-fill text-yellow fs-5"></i>
                    <i class="bi bi-star-fill text-yellow fs-5"></i>
                    <i class="bi bi-star-fill text-yellow fs-5"></i>
                    <i class="bi bi-star-fill text-yellow fs-5"></i>
                    <i class="bi bi-star-half text-yellow fs-5"></i>
                </div>
                <div>
                    <small>Dari 5 Reviews</small>
                </div>
            </div>
        </div>
    {{-- </div> --}}
    @for ($i = 0; $i < 5; $i++)
        <hr>
        <div class="row d-flex justify-content-between">
            <div class="col-1 col-xl-1 my-auto">
                <img src="{{ asset('images/navbar/logo.png') }}" width="56px" alt="">
            </div>
            <div class="col-9 col-xl-8 d-flex justify-content-between">
                <div class="col-7">
                    <p class="fw-bold">Kal** St*** <br><small class="fw-normal">{{ date('d M Y, H:i:s', strtotime(now())) }}</small></p>
                </div>
                <div class="col-5 text-center my-auto">
                    <p>100 <img src="{{ asset('images/logo-cash/diamonds-mole.png') }}" width="25px"></p>
                </div>
            </div>
            <div class="col-2 col-xl-3">
                <i class="bi bi-star-fill text-yellow fs-6"></i>
                <i class="bi bi-star-fill text-yellow fs-6"></i>
                <i class="bi bi-star-fill text-yellow fs-6"></i>
                <i class="bi bi-star-fill text-yellow fs-6"></i>
                @if ($i == 0)
                <i class="bi bi-star-half text-yellow fs-6"></i>
                @else
                <i class="bi bi-star-fill text-yellow fs-6"></i>
                @endif
            </div>
        </div>
    @endfor
    <div class="mt-3 text-center">
        <button class="btn btn-outline-light py-2 px-4">
            Tampilkan Semua
        </button>
    </div>
</div>