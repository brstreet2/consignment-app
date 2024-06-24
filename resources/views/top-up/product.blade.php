<div class="card-body">
    <h5 class="card-title mb-4">1. Mau Top Up yang Berapa? <label class="text-danger">*</label></h5>
    <h6 class="card-subtitle text-muted mb-3">
        ⚡ Top Up Instant
    </h6>
    <div class="d-flex row g-4">
        @for ($i = 1; $i < 6; $i++)
            <div class="col-4">
                <div class="custom-radio">
                    <input type="radio" id="game-{{ $i }}" name="product" class="product" value="{{ 50 * $i }} Diamonds" style="display: none">
                    <label for="game-{{ $i }}" class="text-light col-12 rounded-5">
                        <div class="card-body text-center ">
                            <div class="align-items-center">
                                <img src="{{ asset('images/logo-cash/diamonds-mole.png') }}" width="30" alt="">
                                <p>{{ 50 * $i }} Diamonds <br><small class="card-title fw-bold" id="nominal">Rp {{ number_format(10000 * $i, 0,',','.') }},-</small></p>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        @endfor
    </div>
</div>