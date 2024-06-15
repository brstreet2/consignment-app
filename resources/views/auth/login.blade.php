<link rel="icon" href="{{ asset('images/navbar/logo.png') }}" type="image/png">
<title>Kalem Store</title>

{{-- bootstrap 5.2 --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


{{-- DESKTOP --}}
<div class="d-none d-lg-block">
    <link rel="stylesheet" href="{{ asset('css/login-desktop.css') }}">

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{ route('auth.register') }}" method="POST">
                {{ csrf_field() }}
                <h1>Register</h1>
                {{-- <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span> --}}
                <input type="text" placeholder="Nama" name="name" class="rounded-pill" />
                <input type="email" placeholder="Email" name="email" class="rounded-pill" />
                <input type="text" placeholder="Nomor Handphone" name="phone" class="rounded-pill" />
                <input type="password" placeholder="Password" name="password" class="rounded-pill" />
                <input type="password" placeholder="Konfirmasi Password" name="password_confirmation"
                    class="rounded-pill" />
                <button type="submit">Kirim</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{ route('auth.login') }}" method="POST">
                {{ csrf_field() }}
                <h1>Login</h1>
                {{-- <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span> --}}
                <input type="email" placeholder="Email" class="rounded-pill" />
                <input type="password" placeholder="Password" class="rounded-pill" />
                <a href="#">Lupa Password?</a>
                <button type="submit">Masuk</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Selamat Datang!</h1>
                    <p>Buat akun yuk biar pembelian kamu jadi lebih mudah</p>
                    <button class="ghost" id="signIn">Masuk</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Halo, Sobat Kalem!</h1>
                    <p>Ayo bikin akun di sini!</p>
                    <button class="ghost" id="signUp">Daftar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</div>

{{-- MOBILE --}}
<div class="d-lg-none d-xl-none">
    <div class="tab-content my-5">
        {{-- Login --}}
        <div class="active d-flex" id="login">

            <div class="container border-top">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="card text-white card-mobile">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 py-5">
                                <h1 class="fw-bold m-4 text-uppercase">Masuk</h1>
                                <div class="mb-4 d-flex justify-content-center">
                                    <div class="col-10">
                                        <input type="email" id="typeEmailX" placeholder="Email"
                                            class="text-center form-control form-control-lg h-100 border-radius-custom" />
                                    </div>
                                </div>
                                <div class="mb-4 d-flex justify-content-center">
                                    <div class="col-10">
                                        <input type="password" id="typePasswordX" placeholder="Password"
                                            class="text-center form-control form-control-lg h-100 border-radius-custom" />
                                    </div>
                                </div>
                                <p class="small mt-5 pb-lg-2"><a class="text-white-50 h3" href="#!">Lupa
                                        Password?</a></p>
                                <button class="btn btn-outline-light btn-lg px-5 border-radius-custom"
                                    type="submit">Login</button>
                            </div>

                            <h3>Belum punya akun ?</h3>
                            <li class="nav h3">
                                <div class="col-12 d-flex justify-content-center">
                                    <a class="nav-link text-white-50 fw-bold h3 nav-link" data-bs-toggle="tab"
                                        href="#register">
                                        Daftar Sekarang
                                    </a>
                                </div>
                            </li>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Register --}}
        <div class=" fade text-dark" id="register">
            <div class="container border-bottom">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="card text-white card-mobile">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 py-5">
                                <h1 class="fw-bold m-4 text-uppercase">Daftar Akun</h1>
                                <div class="mb-4 d-flex justify-content-center">
                                    <div class="col-10">
                                        <input type="text" id="typeNamaX" placeholder="Nama"
                                            class="text-center form-control form-control-lg h-100 border-radius-custom" />
                                    </div>
                                </div>
                                <div class="mb-4 d-flex justify-content-center">
                                    <div class="col-10">
                                        <input type="email" id="typeEmailX" placeholder="Email"
                                            class="text-center form-control form-control-lg h-100 border-radius-custom" />
                                    </div>
                                </div>
                                <div class="mb-4 d-flex justify-content-center">
                                    <div class="col-10">
                                        <input type="password" id="typePasswordX" placeholder="Password"
                                            class="text-center form-control form-control-lg h-100 border-radius-custom" />
                                    </div>
                                </div>
                                <div class="mb-4 d-flex justify-content-center">
                                    <div class="col-10">
                                        <input type="password" id="typeKonfirmasiPasswordX"
                                            placeholder="Konfirmasi Password"
                                            class="text-center form-control form-control-lg h-100 border-radius-custom" />
                                    </div>
                                </div>
                                <button class="btn btn-outline-light btn-lg px-5 border-radius-custom"
                                    type="submit">Submit</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
