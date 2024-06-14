<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/navbar/logo.png') }}" type="image/png">
    <title>Kalem Store</title>

    {{-- bootstrap 5.2 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />

    @stack('css')
</head>

<body>
    {{-- desktop (xxl) --}}
    <div class="d-none d-xxl-block sticky-top">
        <nav class=" navbar navbar-light p-3" style="background-color: #121727b5; backdrop-filter: blur(13.59px);">
            <div class="container ">

                {{-- Logo --}}
                <div class="col-md-7 d-flex align-items-center">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/navbar/logo.png') }}" alt="" width="50">
                    </a>
                    <h3 class="text-light">
                        Kalem
                    </h3>
                    <h3 class="text-light">
                        Store
                    </h3>
                </div>

                {{-- Search --}}
                <div class="col-md-5 d-flex justify">
                    <div class="col-md-6">
                        <form class="submit">
                            <div class="input-group">
                                <input type="search" id="nav-search" class=" btn btn-outline-dark py-2 text-light shadow-none text-start" placeholder="Mau top up apa hari ini?">
                                <button class="btn text-secondary shadow-none" type="submit" id="search-button"
                                    style="border-start-end-radius: 13px; border-bottom-right-radius: 13px; background-color: #1e253f;">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6 ">
                        <div class="col-md-12 d-flex justify-content-between">

                            <div class="">
                                <a href="{{ route('login') }}" class="btn btn-warning position-relative h-100 px-4 py-2">
                                    Masuk
                                </a>
                            </div>

                            <div class="">
                                <a href="{{ route('login') }}" class=" btn btn-light btn-hover position-relative h-100 px-4 py-2">
                                    Daftar
                                </a>
                            </div>

                            <div class="">
                                <button class="btn btn-dark h-100 w-100" style="border-radius: 10px">
                                    <i class="fa-solid fa-grip"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </nav>
        {{-- <p class="text-light">xxl</p> --}}
    </div>

    {{-- nest Hub  (only on xl) --}}
    <div class="d-none d-xl-block d-xxl-none sticky-top">
        <nav class="navbar navbar-light p-2" style="background-color: #121727b5; backdrop-filter: blur(13.59px);">
            <div class="container">

                {{-- Logo --}}
                <div class="col-md-6 text-start d-flex align-items-center">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/navbar/logo.png') }}" alt="" width="50">
                    </a>
                    <h3 class="text-light">
                        Kalem
                    </h3>
                    <h3 class="text-light">
                        Store
                    </h3>
                </div>

                {{-- Search --}}
                <div class="col-md-6 d-flex">
                    <div class="col-md-6">
                        <form class="d-flex">
                            <div class="input-group">

                                <input type="search" class="form-control btn btn-outline-dark py-2 text-light shadow-none text-start"
                                placeholder="Mau top up apa hari ini?" aria-label="Search"
                                aria-describedby="search-button"
                                style="border-bottom-left-radius: 13px; border-start-start-radius: 13px; background-color: #1e253f">

                            <button class="btn text-secondary shadow-none" type="submit" id="search-button"
                                style="border-start-end-radius: 13px; border-bottom-right-radius: 13px; background-color: #1e253f;">
                                <i class="fas fa-search"></i>
                            </button>

                            </div>
                        </form>
                    </div>

                    <div class="col-md-6 ">
                        <div class="col-md-12 d-flex justify-content-evenly">

                            <div class="">
                                <a href="{{ route('login') }}" class=" btn btn-dark position-relative h-100 px-4 py-2"
                                    style="background-color: #ffa842; border-radius: 10px">
                                    Masuk
                                </a>
                            </div>

                            <div class="">
                                <a href="{{ route('login') }}" class=" btn btn-light btn-hover position-relative h-100 px-4 py-2"
                                    style="background-color: #FFF6E0; border-radius: 10px; color: #ffa842">
                                    Daftar
                                </a>
                            </div>

                            <div class="">
                                <button class="btn btn-dark h-100 w-100" style="border-radius: 10px">
                                    <i class="fa-solid fa-sun" style="color: #ffa842"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </nav>
        {{-- <p class="text-light">xl</p> --}}
    </div>

    {{-- nest Hub  (only on lg) --}}
    <div class="d-none d-lg-block d-xl-none sticky-top">
        <nav class="px-5 navbar navbar-light p-3"
            style="background-color: #121727b5; backdrop-filter: blur(13.59px);">
            <div class="container">

                {{-- Logo --}}
                <div class="col-md-4 text-start d-flex align-items-center">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/navbar/logo.png') }}" alt="" width="50">
                    </a>
                    <h3 class="text-light">
                        Kalem
                    </h3>
                    <h3 class="text-light">
                        Store
                    </h3>
                </div>

                {{-- Search --}}
                <div class="col-md-8 d-flex justify-content-evenly">
                    <div class="col-md-7">
                        <form class="d-flex">
                            <div class="input-group">

                                <input type="search" class="form-control btn btn-outline-dark py-2 text-light shadow-none text-start"
                                    placeholder="Mau top up apa hari ini?" aria-label="Search"
                                    aria-describedby="search-button"
                                    style="border-bottom-left-radius: 13px; border-start-start-radius: 13px; background-color: #1e253f">

                                <button class="btn text-secondary shadow-none" type="submit" id="search-button"
                                    style="border-start-end-radius: 13px; border-bottom-right-radius: 13px; background-color: #1e253f;">
                                    <i class="fas fa-search"></i>
                                </button>

                            </div>
                        </form>
                    </div>

                    <div class="col-md-5 ">
                        <div class="col-md-12 d-flex">

                            <div class="col-md-5 text-end">
                                <a href="{{ route('login') }}" class=" btn btn-dark position-relative h-100 px-2 py-2"
                                    style="background-color: #ffa842; border-radius: 10px">
                                    Masuk
                                </a>
                            </div>

                            <div class="col-md-5 text-center">
                                <a href="{{ route('login') }}" class=" btn btn-light btn-hover position-relative h-100 px-2 py-2"
                                    style="background-color: #FFF6E0; border-radius: 10px; color: #ffa842">
                                    Daftar
                                </a>
                            </div>

                            <div class="col-md-2">
                                <button class="btn btn-dark h-100 w-100" style="border-radius: 10px" id="btnSwitch">
                                    <i class="fa-solid fa-sun" style="color: #ffa842"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </nav>
        {{-- <p class="text-light">lg</p> --}}
    </div>

    {{-- mobile  (md / sm) --}}
    <div class="d-lg-none d-xl-none sticky-top">
        <nav class=" navbar navbar-light " style="background-color: #121727e2; backdrop-filter: blur(13.59px);">
            <div class="container d-flex justify-content-between">
                {{-- Logo --}}
                <div class="col-sm-6 d-flex align-items-center">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/navbar/logo.png') }}" alt="" width="50">
                    </a>
                    <h3 class="text-light">
                        Kalem
                    </h3>
                    <h3 class="text-light">
                        Store
                    </h3>
                </div>

                <div class="col-sm-6 text-end">
                    <button class="btn text-secondary btn-outline-light" type="submit" id="search-button"
                        style="border-radius: 13px; background-color: #1e253f;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </nav>
        {{-- <p class="text-light">mobile</p> --}}
    </div>
    <div class=" text-light">
        @yield('content')
    </div>

    <script src="{{ asset('js/jquery-3.7.1.js') }}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        
    @stack('scripts')
</body>

</html>
