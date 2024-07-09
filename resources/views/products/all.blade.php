@extends('layouts.navbar')
@section('content')

<div class="d-flex">
    <div class="col-xxl-2 col-xl-2">
        @include('layouts.sidebar')
    </div>

    <div class="col-xxl-10 col-xl-10 bg-black">
        <div class="my-3 px-3">
            <div class="mb-5">
                <p class="fs-4">PUBG Mobile</p>
                <div class="bg-dark-secondary col-md-12 p-3 rounded-5">
                    <div class="d-flex">
                        <div class="col-md-3 d-flex">
                            <i class="fa-solid fa-magnifying-glass mx-2 my-auto"></i>
                            <input type="search" class="bg-transparent btn-outline-none text-decoration-none text-light outline-none p-1 col-10" placeholder="Cari Game di Sini">
                            <p class="h5 my-auto text-dark">|</p>
                        </div>
                        <div class="col-md-9 my-auto">
                            <div class="d-flex">
                                <a href="#" class="mx-4 text-decoration-none py-auto fs-6 text-light">Rank</a>
                                <a href="#" class="mx-4 text-decoration-none py-auto fs-6 text-light">Level</a>
                                <a href="#" class="mx-4 text-decoration-none py-auto fs-6 text-light">Skin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-3">
                {{-- filter --}}
                <div class="d-flex">
                    <div class="col-md-4">
                        <p>Sekitar 9 hasil</p>
                    </div>
                    <div class="col-md-8 d-flex">
                        <p class="my-auto">Sortir Berdasarkan:</p>
                        <div class="radio-buttons-container mt-auto">
                            <div class="radio-button mx-3">
                              <input name="radio-group" id="radio2" class="radio-button__input" type="radio">
                              <label for="radio2" class="radio-button__label">
                                <span class="radio-button__custom"></span>
                                    Paling Baru
                              </label>
                            </div>
                            <div class="radio-button mx-3">
                              <input name="radio-group" id="radio1" class="radio-button__input" type="radio">
                              <label for="radio1" class="radio-button__label">
                                <span class="radio-button__custom"></span>
                                    Harga Termurah
                              </label>
                            </div>
                            <div class="radio-button mx-3">
                              <input name="radio-group" id="radio3" class="radio-button__input" type="radio">
                              <label for="radio3" class="radio-button__label">
                                <span class="radio-button__custom"></span>
                                    Harga Termahal
                              </label>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- card --}}
                <div class="d-flex row">
                    @for ($i = 0; $i < 9; $i++)
                        {{-- <div class="col-md-3">
                            <div class="bg-light rounded-4">
                                <p>asd</p>
                            </div>
                        </div> --}}

                        
                        <a href="{{ route('buy-account.index') }}" class="col-md-3 g-2 text-decoration-none text-light">
                            <div class="card-custom w-100">
                                <div class="card2 w-100 p-3 rounded-4 bg-dark">
                                    {{-- 1 --}}
                                    <div>
                                        <img src="{{ asset('images/banner/pubg-banner.jpg') }}" class="w-100 rounded-3" height="80px" alt="">
                                    </div>
                                     
                                    {{-- 2 --}}
                                    <div>
                                        <p>PUBGm Akun Sultan</p>
                                    </div>

                                    {{-- 3 --}}
                                    <div class="d-flex">
                                        <div class="d-flex col-md-6">
                                            <div class="badge text-bg-secondary mx-1">
                                                Min. 1
                                            </div>
                                            <div class="badge text-bg-secondary mx-1">
                                                99
                                            </div>
                                            <div class="badge text-bg-secondary mx-1">
                                                <i class="fa-solid fa-clock mx-1"></i> 1 jam
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <i class="fa-solid fa-circle-info fs-5"></i>
                                        </div>
                                    </div>

                                    {{-- 4 --}}
                                    <div class="mt-3">
                                        <p class="text-end my-auto">Rp970.000 <small class="text-muted">IDR</small></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>

                {{-- pagination --}}
                <div class="text-center my-5">
                    <div class="pagination">
                        <a href="#" class="text-light">&laquo;</a>
                        <a href="#" class="text-light active">1</a>
                        <a href="#" class="text-light">2</a>
                        <a href="#" class="text-light">3</a>
                        <a href="#" class="text-light">4</a>
                        <a href="#" class="text-light">5</a>
                        <a href="#" class="text-light">6</a>
                        <a href="#" class="text-light">&raquo;</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection