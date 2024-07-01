<div class="d-lg-block mt-3 sticky-top sticky-offset">
    <div class="overflow-auto m-2">
        <div class="p-4 p-xl-3 bg-dark border-sm-dark rounded-3 ">

            <h6 class="fw-bold">MENU</h6>
            <a href="{{ route('home') }}" class="mx-1 text-decoration-none btn hover-card-yellow rounded-3 p-2 col-12 text-start">
                <i class="fa-solid fa-house mx-2 {{ (request()->route()->getName() == 'home') ? 'text-yellow' : '' }}"></i>
                <small class="{{ (request()->route()->getName() == 'home') ? 'text-yellow' : '' }} fs-6">Beranda</small>
            </a>
            <br>

            <a href="{{ route('check.transaction') }}" class="mx-1 text-decoration-none btn hover-card-yellow rounded-3 p-2 col-12 text-start">
                <i class="fa-solid fa-magnifying-glass mx-2 {{ (request()->route()->getName() == 'check.transaction') ? 'text-yellow' : '' }}"></i> 
                <small class="{{ (request()->route()->getName() == 'check.transaction') ? 'text-yellow' : '' }} fs-6">Cek Transaksi</small>
            </a>
            <br>

            <h6 class="mt-2 fw-bold">NAVIGASI</h6>
            <a href="{{ route('list.transaction') }}" class="mx-1 text-decoration-none btn hover-card-yellow rounded-3 p-2 col-12 text-start">
                <i class="fa-solid fa-list mx-2 {{ (request()->route()->getName() == 'list.transaction') ? 'text-yellow' : '' }}"></i>  
                <small class="{{ (request()->route()->getName() == 'list.transaction') ? 'text-yellow' : '' }} fs-6">Daftar Transaksi</small>
            </a>
            <br>

            <a href="{{ route('faq') }}" class="mx-1 text-decoration-none btn hover-card-yellow rounded-3 p-2 col-12 text-start">
                <i class="fa-solid fa-question mx-2 fs-5 {{ (request()->route()->getName() == 'faq') ? 'text-yellow' : '' }}"></i> 
                <small class="{{ (request()->route()->getName() == 'faq') ? 'text-yellow' : '' }} fs-6">FAQ</small>
            </a>
            <br>
            
            <a href="#" class="mx-1 text-decoration-none btn hover-card-yellow rounded-3 p-2 col-12 text-start">
                <i class="fa-solid fa-phone mx-2"></i> 
                Hubungi Kami
            </a>
            <br>
            
            
            <h6 class="mt-2 fw-bold">PENGGUNA</h6>
            <a href="{{ route('auth.index') }}" class="mx-1 text-decoration-none btn hover-card-yellow rounded-3 p-2 col-12 text-start">
                <i class="fa-solid fa-right-to-bracket mx-2"></i> Masuk
            </a>
            <br>

            <a href="{{ route('auth.index') }}" class="mx-1 text-decoration-none btn hover-card-yellow rounded-3 p-2 col-12 text-start">
                <i class="fa-regular fa-user mx-2"></i> 
                Daftar
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