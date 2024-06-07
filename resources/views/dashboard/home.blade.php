@extends('layouts.navbar')
@section('content')

<link rel="stylesheet" href="{{ url('css/home.css') }}">

<div>
    <div class="bg"></div>

    @include('dashboard.banner-carousel')


    <div class="container my-4">
        <div class="d-flex">
            <button type="button" class="btn btn-transparent btn-outline-light position-relative" style="border-radius: 13px">
                TOP UP
            </button>
        </div>
    </div>

    <div class="container">
        <div class="row g-2" style="">
            @for ($i = 0; $i < 9; $i++)
                <div class="col-md-2 col-4 my-lg-3 ">
                    <img src="{{ asset('images/banner/mole-banner.jpg') }}" class="img-fluid" style="border-radius: 20px" alt="banner">
                </div>
            @endfor
        </div>
    </div>
     
</div>
@endsection
