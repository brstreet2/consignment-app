@extends('layouts.navbar')
@section('content')

<div>
    <div class="bg"></div>

    @include('dashboard.banner-carousel')

    <div class="container mt-4 mb-2">
        <div class="d-flex">
            <button type="button" id="category" class="mx-2 btn btn-transparent shadow-lg rounded-pill">
                TOP UP
            </button>
            <button type="button" id="category" class="mx-2 btn btn-transparent shadow-lg rounded-pill">
                BELI AKUN
            </button>
        </div>
    </div>

    @include('dashboard.top-up')

</div>
@endsection
