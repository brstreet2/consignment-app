@extends('layouts.navbar')
@section('content')

<div>
    <div class="bg"></div>

    @include('dashboard.banner-carousel')

    <!-- Nav tabs -->
    <div class="container mt-4 mb-2">
        <div class="d-flex">
            <div class="nav" id="myTab" role="tablist">
                <button type="button" id="category" class="mx-2 btn btn-transparent shadow-lg rounded-pill" data-bs-toggle="tab" data-bs-target="#top-up"  role="tab" aria-controls="top-up" aria-selected="true">
                    TOP UP
                </button>
                <button type="button" id="category" class="mx-2 btn btn-transparent shadow-lg rounded-pill" data-bs-toggle="tab" data-bs-target="#buy-account"  role="tab" aria-controls="buy-account" aria-selected="true">
                    BELI AKUN
                </button>
            </div>
        </div>
    </div>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="top-up" role="tabpanel" aria-labelledby="top-up-tab" tabindex="0">@include('dashboard.top-up')</div>
        <div class="tab-pane" id="buy-account" role="tabpanel" aria-labelledby="buy-account-tab" tabindex="0">@include('dashboard.buy-account')</div>
    </div>

</div>
@endsection
