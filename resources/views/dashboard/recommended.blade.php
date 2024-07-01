<div class="container">
    <p class="text-light h4">Paling Banyak Dicari</p>

    <div class="row">
        @for ($i = 0; $i < 8; $i++)
            @if ($i % 2)
                <div class="p-1 col-md-3">
                    <button class="btn col-md-12 d-flex rounded-3 text-light" id="recommended-product">
                        <div class="col-md-3">
                            <img src="{{ asset('images/banner/pubg-banner.jpg') }}" class="rounded-3" width="70px" height="70px" style="object-fit: cover" alt="">
                        </div>
                        <div class="col-md-9 my-auto text-start px-2">
                            <div class="col-md-12" >
                                <small style="font-size: 13px">Player Unkown BattleGround</small>
                            </div>
                            <div class="col-md-12">
                                <small style="font-size: 12px">KRAFTON</small>
                            </div>
                        </div>
                    </button>
                </div>
            @else
                <div class="p-1 col-md-3">
                    <button class="btn col-md-12 d-flex rounded-3 text-light" id="recommended-product">
                        <div class="col-md-3">
                            <img src="{{ asset('images/banner/mole-banner.jpg') }}" class="rounded-3" width="70px" height="70px" style="object-fit: cover" alt="">
                        </div>
                        <div class="col-md-9 my-auto text-start px-2">
                            <div class="col-md-12" >
                                <small class="col-md-12" style="font-size: 13px">Mobile Legends</small>
                            </div>
                            <div class="col-md-12">
                                <small class="col-md-12" style="font-size: 12px">MOONTON</small>
                            </div>
                        </div>
                    </button>
                </div>
            @endif
        @endfor
    </div>
</div>