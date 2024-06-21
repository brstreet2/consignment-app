@extends('layouts.navbar')
@section('content')

<div>
    <div class="bg"></div>

    <div class="d-flex justify-content-center">
        {{-- sidebar on XXL --}}
        <div class="d-none d-lg-block col-xxl-2 bg-transparent" >
            @include('layouts.sidebar')
        </div>

        {{-- content --}}
        <div class="col-xxl-10 col-md-12">
            @include('dashboard.banner-carousel')
        
            <!-- Nav tabs -->
            <div class="container mt-4 mb-2">
                <div class="d-flex">
                    <div class="nav" id="myTab" role="tablist">
                        <button type="button" id="category" class="active  mx-2 btn btn-transparent shadow-lg rounded-pill" data-bs-toggle="tab" data-bs-target="#top-up"  role="tab" aria-controls="top-up" aria-selected="true">
                            TOP UP
                        </button>
                        <button type="button" id="category" class="mx-2 btn btn-transparent shadow-lg rounded-pill" data-bs-toggle="tab" data-bs-target="#buy-account"  role="tab" aria-controls="buy-account">
                            BELI AKUN
                        </button>
                    </div>
                </div>
            </div>
        
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade active show" id="top-up" role="tabpanel" aria-labelledby="top-up-tab" tabindex="0">@include('dashboard.top-up')</div>
                <div class="tab-pane fade" id="buy-account" role="tabpanel" aria-labelledby="buy-account-tab" tabindex="0">@include('dashboard.buy-account')</div>
            </div>
    
        </div>
    </div>

</div>
@endsection
