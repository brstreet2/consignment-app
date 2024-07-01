<div class="container">
    <p class="text-light h4">Paling Banyak Dicari</p>

    <div class="row">
        @for ($i = 0; $i < 8; $i++)
            <div class="p-1 col-md-3">
                <button class="btn col-md-12 d-flex rounded-4 text-light" id="recommended-product">
                    <div class="col-md-3">
                        <img src="{{ asset('images/banner/pubg-banner.jpg') }}" class="rounded-4" width="70px" height="70px" style="object-fit: cover" alt="">
                    </div>
                    <div class="col-md-9 my-auto text-start px-2">
                        <small style="font-size: 13px">Player Unkown BattleGround</small>
                        <small style="font-size: 12px">KRAFTON</small>
                    </div>
                </button>
            </div>
        @endfor
    </div>
</div>