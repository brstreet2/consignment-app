<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <title>Consignment</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        <nav class="px-5 navbar navbar-light p-3" style="background-color: #121727b5; backdrop-filter: blur(13.59px);">
            <div class="container-fluid mx-5">

                {{-- Logo --}}
                <div class="col-md-7 text-start">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/logo.png') }}" alt="" width="50">
                    </a>
                </div>

                {{-- Search --}}
                <div class="col-md-5 d-flex">
                    <div class="col-md-6">
                        <form class="d-flex">
                            <div class="input-group">

                                <input type="search" class="form-control btn-outline-dark py-2"
                                    placeholder="Mau top up apa hari ini?" aria-label="Search"
                                    aria-describedby="search-button"
                                    style="border-bottom-left-radius: 13px; border-start-start-radius: 13px; background-color: #1e253f">

                                <button class="btn text-secondary btn-outline-dark" type="submit" id="search-button"
                                    style="border-start-end-radius: 13px; border-bottom-right-radius: 13px; background-color: #1e253f;">
                                    <i class="fas fa-search"></i>
                                </button>

                            </div>
                        </form>
                    </div>

                    <div class="col-md-6 ">
                        <div class="col-md-12 d-flex justify-content-evenly">

                            <div class="">
                                <a href="#" class=" btn btn-dark position-relative h-100 px-4 py-2"
                                    style="background-color: #ffa842; border-radius: 10px">
                                    Masuk
                                </a>
                            </div>

                            <div class="">
                                <a href="#" class=" btn btn-light btn-hover position-relative h-100 px-4 py-2"
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
        {{-- <p class="text-light">xxl</p> --}}
    </div>

    {{-- nest Hub  (only on xl) --}}
    <div class="d-none d-xl-block d-xxl-none sticky-top">
        <nav class="px-5 navbar navbar-light p-2" style="background-color: #121727b5; backdrop-filter: blur(13.59px);">
            <div class="container-fluid mx-5">

                {{-- Logo --}}
                <div class="col-md-5 text-start">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/logo.png') }}" alt="" width="50">
                    </a>
                </div>

                {{-- Search --}}
                <div class="col-md-7 d-flex">
                    <div class="col-md-6">
                        <form class="d-flex">
                            <div class="input-group">

                                <input type="search" class="form-control btn-outline-light py-2"
                                    placeholder="Mau top up apa hari ini?" aria-label="Search"
                                    aria-describedby="search-button"
                                    style="border-bottom-left-radius: 13px; border-start-start-radius: 13px; background-color: #1e253f">

                                <button class="btn text-secondary btn-outline-light" type="submit" id="search-button"
                                    style="border-start-end-radius: 13px; border-bottom-right-radius: 13px; background-color: #1e253f;">
                                    <i class="fas fa-search"></i>
                                </button>

                            </div>
                        </form>
                    </div>

                    <div class="col-md-6 ">
                        <div class="col-md-12 d-flex justify-content-evenly">

                            <div class="">
                                <a href="#" class=" btn btn-dark position-relative h-100 px-4 py-2"
                                    style="background-color: #ffa842; border-radius: 10px">
                                    Masuk
                                </a>
                            </div>

                            <div class="">
                                <a href="#" class=" btn btn-light btn-hover position-relative h-100 px-4 py-2"
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
    <div class="d-none d-lg-block d-xl-none">
        <nav class="px-5 navbar navbar-light p-3"
            style="background-color: #121727b5; backdrop-filter: blur(13.59px);">
            <div class="container">

                {{-- Logo --}}
                <div class="col-md-4 text-start">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/logo.png') }}" alt="" width="50">
                    </a>
                </div>

                {{-- Search --}}
                <div class="col-md-8 d-flex justify-content-evenly">
                    <div class="col-md-7">
                        <form class="d-flex">
                            <div class="input-group">

                                <input type="search" class="form-control btn-outline-light py-2"
                                    placeholder="Mau top up apa hari ini?" aria-label="Search"
                                    aria-describedby="search-button"
                                    style="border-bottom-left-radius: 13px; border-start-start-radius: 13px; background-color: #1e253f">

                                <button class="btn text-secondary btn-outline-light" type="submit"
                                    id="search-button"
                                    style="border-start-end-radius: 13px; border-bottom-right-radius: 13px; background-color: #1e253f;">
                                    <i class="fas fa-search"></i>
                                </button>

                            </div>
                        </form>
                    </div>

                    <div class="col-md-5 ">
                        <div class="col-md-12 d-flex">

                            <div class="col-md-5 text-end">
                                <a href="#" class=" btn btn-dark position-relative h-100 px-2 py-2"
                                    style="background-color: #ffa842; border-radius: 10px">
                                    Masuk
                                </a>
                            </div>

                            <div class="col-md-5 text-center">
                                <a href="#" class=" btn btn-light btn-hover position-relative h-100 px-2 py-2"
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
                <div class="col-sm-6 d-flex justify-content-evenly">
                    <div class="col-sm-3 text-start">
                        <a class="" href="#">
                            <img src="{{ asset('images/logo.png') }}" alt="" width="50">
                        </a>
                    </div>

                    <div class="col-sm-9 text-light fw-bold h2">
                        <span class="align-middle">CONSIGNMENT</span>
                    </div>
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

    <script src="{{ asset('js/jquery-3.7.1.js') }}" />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    @stack('scripts')
</body>

</html>
