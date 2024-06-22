@extends('layouts.navbar')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/transaction.css') }}">

    <div class="d-none d-lg-block">

        <div class="d-flex">
            <div class="col-xxl-2">
                @include('layouts.sidebar')
            </div>
    
            <div class="col-xxl-10 container-fluid mt-3 px-3">
                <div class=" bg-dark-secondary rounded-4">
                    <p class="h2 text-center text-dark fw-bold p-5 bg-secondary rounded-4">Transaksi Terdata</p>
                    <div class="px-4 pt-3 text-start row d-flex">
                        <div class="col-3">
                            <p class="h4 fw-bold">
                                Tanggal
                            </p>
                        </div>
                        <div class="col-3">
                            <p class="h4 fw-bold">
                                Transaction ID
                            </p>
                        </div>
                        <div class="col-3">
                            <p class="h4 fw-bold">
                                Harga
                            </p>
                        </div>
                        <div class="col-3">
                            <p class="h4 fw-bold">
                                Status
                            </p>
                        </div>
                        <hr>
                    </div>
                    @for ($i = 0; $i < 10; $i++)
                        <div class="text-start row d-flex px-4">
                            <div class="col-3">
                                <p>{{ date('d F Y H:i:s', strtotime(now())) }}</p>
                            </div>
                            <div class="col-3">
                                <p>TRX**********6{{ $i }}</p>
                            </div>
                            <div class="col-3">
                                <p>Rp {{ number_format(10000 * $i + 1000,0,',','.') }}</p>
                            </div>
                            @if ($i % 2)
                                <div class="col-3">
                                    <p class="text-success">Success</p>
                                </div>
                            @elseif($i == 4)
                                <div class="col-3">
                                    <p class="text-warning">Unpaid</p>
                                </div>
                            @else
                                <div class="col-3">
                                    <p class="text-primary">Processing</p>
                                </div>
                            @endif
                            <hr>
                        </div>
                    @endfor
                </div>
        
                <div class="m-5">
                    <p>Gak Nemu Transaksi Kamu? Coba Cari <a href="{{ route('check.transaction') }}" class="text-decoration-none">Disini</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection