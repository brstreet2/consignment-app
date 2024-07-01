@extends('layouts.navbar')
@section('content')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">

{{-- desktop --}}
<div class="d-none d-lg-block">

    <div class="d-flex">
        <div class="col-xxl-2 col-xl-2">
            @include('layouts.sidebar')
        </div>

        <div class="col-xxl-10 col-xl-10 mt-3 bg-black">
            <div class="bg-banner">
                {{-- Image Ratio 763 x 260 --}}
                <img src="{{ asset('images/detail-banner/mole-bg-banner.png') }}" class="img-fluid d-block mx-auto w-100" alt="...">
                <img src="{{ asset('images/product/mole-crop.png') }}" class="img-fluid w-10 rounded-4" alt="">
            </div>
    
    
            <div class="row d-flex mt-5 container-fluid">
                {{-- kiri --}}
                <div class="col-8">
                    <div class="card card-dark my-2 p-2 rounded-3">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Mobile Legends Bang Bang</h5>
                            <h6 class="card-subtitle text-muted">
                                Beli dan Top up Diamonds Mobile Legends Bang Bang dengan harga paling murah dan proses instan di website KalemStore! 100% legal dan aman terpercaya!.
                                <br><br>
                                Top Up Mobile Legends sangat mudah, masukkan UserID akun Mobile Legends, pilih nominal Diamonds yang diinginkan, pilih metode pembayaran dan selesaikan pembayarannya
                                <br><br>
                                Top Up Mobile Legends bisa bayar menggunakan Shopeepay, Bank Transfer, QRIS.
                                <br><br>
                                Download dan mainkan Mobile Legends sekarang!
                            </h6>
                        </div>
                    </div>
    
                    <div class="card card-dark my-4 p-2 rounded-3">
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <div class="d-flex">
                                <div class="nav" id="myTab" role="tablist">
                                    <button type="button" id="category" class="active mx-2 py-2 px-5 btn btn-transparent shadow-lg rounded-3" data-bs-toggle="tab" data-bs-target="#detail" role="tab" aria-controls="detail" aria-selected="true">
                                        Produk
                                    </button>
                                    <button type="button" id="category" class="mx-2 py-2 px-5 btn btn-transparent shadow-lg rounded-3" data-bs-toggle="tab" data-bs-target="#review" role="tab" aria-controls="review">
                                        Ulasan
                                    </button>
                                </div>
                            </div>
    
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="detail" role="tabpanel" aria-labelledby="detail-tab" tabindex="0">
                                    <div class=" card- my-1 rounded-5">
                                        @include('top-up.product')
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab" tabindex="0">
                                    @include('top-up.reviews')
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
    
                {{-- kanan --}}
                <div class="col-4">
                    {{-- Informasi Akun --}}
                    <div class="card p-2 my-2 rounded-3" style="background-color: #252f45e6">
                        <div class="card-body">
                            <h5 class="card-title">2. Informasi Akun <i class="bi bi-question-circle fs-6" data-bs-toggle="modal" data-bs-target="#UID"></i> <label class="text-danger">*</label></h5>
                        </div>
    
                        {{-- modal START--}}
                            <div class="modal fade " id="UID" tabindex="-1" aria-labelledby="UIDLabel" aria-hidden="true">
                                <div class="d-flex align-items-center h-100">
                                    <div class="modal-dialog">
                                        <div class="modal-content text-warning p-4 rounded-5 bg-secondary">
                                            <div class="mb-3 text-end">
                                                <button type="button" class="btn-close bg-danger " data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div>
                                                <img src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:hopestore/p/1702308854an_MLBB.webp" class="w-100" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- modal END --}}
    
                        <div class="card-body">
                            <div>
                                <div>
                                    <h6>UID</h6>
                                </div>
                                <div class="text-center">                            
                                    <input type="text" name="uid" id="uid" class="form-control btn btn-outline-dark rounded-3 text-start py-3 card-darken text-light" placeholder="Cth: 1234876509876">
                                </div>
                            </div>
    
                            <div class=" mt-1 d-flex">
                                <div class="col-6"></div>
                                <div class="col-6">                            
                                    <h6>Region ID</h6>
                                    <input type="text" name="region" id="region" class="form-control btn btn-outline-dark rounded-3 text-start py-2 card-darken text-light" placeholder="Cth: 12348">
                                </div>
                            </div>
                        </div>
                    </div>
    
                    {{-- Code Voucher --}}
                    <div class="card p-2 my-4 rounded-3" style="background-color: #252f45e6">
                        <div class="card-body">
                            <h5 class="card-title">3. Voucher Promo</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <h6>Masukkan Kode</h6>
                            </div>
                            <div class="text-center">
                                <input type="search" class="form-control btn btn-outline-dark rounded-3 text-start py-3 card-darken text-light" placeholder="Cth: KS2024****">
                                <button type="button" class="btn btn-warning mt-4 col-12">Cek Kode Promo</button>
                            </div>
                        </div>
                    </div>
             
                    {{-- Metode Pembayaran --}}
                    <div class="card p-2 my-4 rounded-3" style="background-color: #252f45e6">
                        <div class="card-body">
                            <h5 class="card-title">4. Metode Pembayaran <label class="text-danger">*</label></h5>
                        </div>
                        <div class="card-body">
                            <div class="accordion accordion-flush" id="payment-method">
    
                                <div class="accordion-item mb-2" id="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" id="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        E-Money
                                        </button>
                                    </h2>
                                    
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#payment-method">
                                        <div class="m-3">
                                            <button class="btn btn-dark col-12 py-2 rounded-3 bg-primary">
                                                <div class="form-check">
                                                    <input class="form-check-input payment-method" type="radio" name="payment-method" id="QRIS" value="QRIS">
                                                    <label class="d-flex justify-content-between form-check-label text-light fw-bold" for="QRIS" onclick="window.location.href='#payment'">
                                                        QRIS
                                                        <img src="{{ asset('images/payments/qris.png') }}" width="60" alt="">
                                                    </label>
                                                </div>
                                            </button>
                                        </div>
    
                                        <div class="m-3">
                                            <button class="btn btn-dark col-12 py-2 rounded-3 bg-light">
                                                <div class="form-check">
                                                    <input class="form-check-input payment-method" type="radio" name="payment-method" id="ShopeePay" value="ShopeePay">
                                                    <label class="d-flex justify-content-between form-check-label text-danger" for="ShopeePay"onclick="window.location.href='#payment'">
                                                        ShopeePay
                                                        <img src="{{ asset('images/payments/spay.png') }}" width="60" alt="">
                                                    </label>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="accordion-item mb-2" id="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" id="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Virtual Account
                                        </button>
                                    </h2>
                                    
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#payment-method">
                                        <div class="m-3">
                                            <button class="btn btn-dark col-12 py-2 rounded-3 bg-light">
                                                <div class="form-check">
                                                    <input class="form-check-input payment-method" type="radio" name="payment-method" id="BCA" value="BCA">
                                                    <label class="d-flex justify-content-between form-check-label text-primary fw-bold" for="BCA" onclick="window.location.href='#payment'">
                                                        BCA
                                                        <img src="{{ asset('images/payments/bca.png') }}" width="60" alt="">
                                                    </label>
                                                </div>
                                            </button>
                                        </div>
    
                                        <div class="m-3">
                                            <button class="btn btn-dark col-12 py-2 rounded-3 bg-light">
                                                <div class="form-check">
                                                    <input class="form-check-input payment-method" type="radio" name="payment-method" id="BNI" value="BNI">
                                                    <label class="d-flex justify-content-between form-check-label text-danger fw-bold" for="BNI" onclick="window.location.href='#payment'">
                                                        BNI
                                                        <img src="{{ asset('images/payments/bni.png') }}" width="60" alt="">
                                                    </label>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{-- START jangan dihapus --}}
                                <div>
                                </div>
                                {{-- END jangan dihapus --}}
                            </div>
                        </div>
                    </div>
    
                    {{-- Notifikasi Info --}}
                    <div class="card p-2 my-2 rounded-3" style="background-color: #252f45e6">
                        <div class="card-body">
                            <h5 class="card-title">5. Notifikasi Info</h5>
                        </div>
                        <div class="card-body">                   
                            <input type="email" id="email" class="form-control btn btn-outline-dark rounded-3 text-start py-3 card-darken text-light" placeholder="Cth: kalem@store.com">
                            <small>*Status transaksi dikirimkan via email (Optional)</small>
                        </div>
                    </div>
    
                    {{-- SEND Button / modal trigger --}}
                    <div class="card my-3 rounded-5 bg-transparent" id="payment">
                        <button class="btn btn-warning py-3" data-bs-toggle="modal" data-bs-target="#buyConfirmation">~~~~ Konfirmasi Pesanan ~~~~</button>
                    </div>
                    
                    {{-- Modal Payment --}}
                    <div class="modal fade" style="top: 10%" id="buyConfirmation" tabindex="-1" aria-labelledby="buyConfirmationLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content text-dark px-5 pt-4 pb-4 rounded-5">
    
                                <h5 class="fw-bold text-center py-3">Detail Order Kamu</h5>
    
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p>Tujuan</p>
                                    </div>
                                    <div class="text-end d-flex">
                                        <p id="modal-uid" class="fw-bold"></p>
                                        <small id="modal-region"></small>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Produk</p>
                                    <p id="modal-product"></p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Metode Pembayaran</p>
                                    <p id="modal-payment-method"></p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Notifikasi email</p>
                                    <p id="modal-email"></p>
                                </div>
    
                                <div class="row d-flex justify-content-between">
                                    <div class="col-5">
                                        <button class="btn btn-light col-12 py-2" data-bs-dismiss="modal">cancel</button>
                                    </div>
                                    <div class="col-7">
                                        {{-- <button type="submit" class="btn btn-warning col-12 py-2">Lanjut Pembayaran</button> --}}
                                        <a href="{{ route('product.payment') }}" class="btn btn-warning col-12 py-2">Lanjut Pembayaran</a>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
    
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {


        $('#uid').on('keyup', function() {
            var inputValue = $(this).val();
            $('#modal-uid').text(inputValue);
        });
 
        $('.product').on('change', function() {
            var inputValue = $(this).val();
            console.log(inputValue);
            $('#modal-product').text(inputValue);
        });

        $('.payment-method').on('change', function() {
            var inputValue = $(this).val();
            $('#modal-payment-method').text(inputValue);
        });
        
        $('#email').on('change', function() {
            var inputValue = $(this).val();
            $('#modal-email').text(inputValue);
        });

        $('#region').on('keyup', function() {
            var inputValue = $(this).val();
            $('#modal-region').text('('+inputValue+')');
        });

        $('.custom-input input[type="radio"]').change(function() {
            $('input[type="radio"]').each(function() {
                if ($(this).is(':checked')) {
                    $(this).next('label').css('border-color', '#ffa842');
                    $(this).next('label').css('background-color', '#00000082');
                } else {
                    $(this).next('label').css('border-color', '#99999a');
                    $(this).next('label').css('background-color', '');
                }
            });
            var inputValue = $(this).val();

            $('#modal-product').text(inputValue);
        });
    });
</script>

@endsection