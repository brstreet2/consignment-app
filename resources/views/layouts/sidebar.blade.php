<div class="d-lg-block mt-3 sticky-top sticky-offset">
    <div class="overflow-auto m-2">
        <div class="p-4 p-xl-3 bg-dark border-sm-dark rounded-3 ">

            <h6 class="fw-bold">MENU</h6>
            <a href="{{ route('home') }}" class="mx-1 text-decoration-none btn hover-card-yellow rounded-3 p-2 col-12 text-start">
                <div class="d-flex">
                    <div class="col-md-3">
                        <i class="fa-solid fa-house mx-2 {{ (request()->route()->getName() == 'home') ? 'text-yellow' : '' }}"></i>
                    </div>
                    <div class="col-md-9">
                        <small class="{{ (request()->route()->getName() == 'home') ? 'text-yellow' : '' }} fs-6">Beranda</small>
                    </div>
                </div>
            </a>
            <br>

            <a href="{{ route('check.transaction') }}" class="mx-1 text-decoration-none btn hover-card-yellow rounded-3 p-2 col-12 text-start">
                <div class="d-flex">
                    <div class="col-md-3">
                        <i class="fa-solid fa-magnifying-glass mx-2 {{ (request()->route()->getName() == 'check.transaction') ? 'text-yellow' : '' }}"></i> 
                    </div>
                    <div class="col-md-9">
                        <small class="{{ (request()->route()->getName() == 'check.transaction') ? 'text-yellow' : '' }} fs-6">Cek Transaksi</small>
                    </div>
                </div>
            </a>
            <br>

            <a href="{{ route('get.products') }}" class="mx-1 text-decoration-none btn hover-card-yellow rounded-3 p-2 col-12 text-start">
                <div class="d-flex">
                    <div class="col-md-3">
                        <i class="fa-solid fa-gamepad mx-2 fs-5 {{ (request()->route()->getName() == 'get.products') ? 'text-yellow' : '' }}"></i>
                    </div>
                    <div class="col-md-9">
                        <small class="{{ (request()->route()->getName() == 'get.products') ? 'text-yellow' : '' }} fs-6">Game</small>
                    </div>
                </div>
            </a>
            <br>

            <h6 class="mt-2 fw-bold">NAVIGASI</h6>
            <a href="{{ route('list.transaction') }}" class="mx-1 text-decoration-none btn hover-card-yellow rounded-3 p-2 col-12 text-start">
                <div class="d-flex">
                    <div class="col-md-3">
                        <i class="fa-solid fa-list mx-2 {{ (request()->route()->getName() == 'list.transaction') ? 'text-yellow' : '' }}"></i>  
                    </div>
                    <div class="col-md-9">
                        <small class="{{ (request()->route()->getName() == 'list.transaction') ? 'text-yellow' : '' }} fs-6">Daftar Transaksi</small>
                    </div>
                </div>
            </a>
            <br>

            <a href="{{ route('faq') }}" class="mx-1 text-decoration-none btn hover-card-yellow rounded-3 p-2 col-12 text-start">
                <div class="d-flex">
                    <div class="col-md-3">
                        <i class="fa-solid fa-question mx-2 fs-5 {{ (request()->route()->getName() == 'faq') ? 'text-yellow' : '' }}"></i> 
                    </div>
                    <div class="col-md-9">
                        <small class="{{ (request()->route()->getName() == 'faq') ? 'text-yellow' : '' }} fs-6">FAQ</small>
                    </div>
                </div>
            </a>
            <br>
            
            <a href="{{ route('contact-us') }}" class="mx-1 text-decoration-none btn hover-card-yellow rounded-3 p-2 col-12 text-start">
                <div class="d-flex">
                    <div class="col-md-3">
                        <i class="fa-solid fa-phone mx-2 {{ (request()->route()->getName() == 'contact-us') ? 'text-yellow' : '' }}"></i> 
                    </div>
                    <div class="col-md-9">
                        <small class="{{ (request()->route()->getName() == 'contact-us') ? 'text-yellow' : '' }} fs-6">Hubungi Kami</small>
                    </div>
                </div>
            </a>
            <br>
            
            
            <h6 class="mt-2 fw-bold">PENGGUNA</h6>
            <a href="{{ route('auth.index') }}" class="mx-1 text-decoration-none btn hover-card-yellow rounded-3 p-2 col-12 text-start">
                <div class="d-flex">
                    <div class="col-md-3">
                        <i class="fa-solid fa-right-to-bracket mx-2"></i>
                    </div>
                    <div class="col-md-9">
                        <small class="{{ (request()->route()->getName() == 'auth.index') ? 'text-yellow' : '' }} fs-6">Masuk</small>
                    </div>
                </div>
            </a>
            <br>

        </div>

        <div class="text-center sticky-bottom">
            <img src="{{ asset('images/gif/astronout.gif') }}" class="w-75 image-revert" 
                data-bs-toggle="tooltip" 
                data-bs-placement="top"
                data-bs-custom-class="custom-tooltip"
                data-bs-title="Hai, Butuh Bantuan?">
        </div>
    </div>

</div>

<!-- Initialize Tooltips -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    });
</script>