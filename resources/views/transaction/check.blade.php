@extends('layouts.navbar')
@section('content')

<div class="d-flex">
    <div class="col-xxl-2 col-xl-2">
        @include('layouts.sidebar')
    </div>
    <div class="col-xl-10 p-3 mt-5">
        <div class="text-center">
            <p class="h3">Cari Transaksi</p>
            <form action="#" method="get" class="col-6 mx-auto" >
                @csrf

                <div class="form-group bg-dark-secondary text-light shadow-none text-start rounded-pill d-flex align-items-center">
                    <div class="col-1">
                        <i class="bi bi-journal-check fs-3 text-center mx-3"></i>
                    </div>
                    <div class="col-9">
                        <input type="text" class="bg-transparent btn btn-outline-transparent align-items-center text-start btn-outline-none col-12 text-light">
                    </div>
                    <div class="col-2 text-end">
                        <button type="submit" class="btn btn-warning rounded-pill col-12">Cari</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-10 mx-auto mt-5 bg-dark-secondary p-3 rounded-5 d-flex">
            <div class="col-xl-3 my-auto">
                <img src="{{ asset('images/product/mole-crop.png') }}" class="rounded-4" width="180px" alt="">
            </div>
            <div class="col-6 py-2">
                <div>
                    <p class="h3">Mobile Legends Bang Bang</p>
                    <p class="fs-6">MOONTON</p>
                </div>
                <p class="h4 bg-grey text-light text-center col-9 rounded-5 p-1">TRX1234567890MLBB</p>
                
                <small class="text-muted">Transaction Date: {{ date('d M Y, H:i:s', strtotime(now())) }}</small>

            </div>
            <div class="col-3 my-auto">
                <p class="fs-6 bg-yellow text-center col-xl-5 rounded-5 p-1">PENDING</p>
                <p>Top-Up Diamonds</p>
                <p>150 <img src="{{ asset('images/logo-cash/diamonds-mole.png') }}" width="25px" alt=""></p>
                <p class="text-yellow">Rp 30.000</p>
                <p class="text-yellow">via <img src="{{ asset('images/payments/qris.png') }}" class="mx-2 bg-light px-1 rounded-4" width="75px" alt=""></p>
            </div>
        </div>
    </div>
</div>

@endsection