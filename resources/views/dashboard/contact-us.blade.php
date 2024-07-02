@extends('layouts.navbar')
@section('content')

<div class="d-flex">
    <div class="col-md-2">
        @include('layouts.sidebar')
    </div>
    <div class="col-md-10 bg-black p-4">
        {{-- ats --}}
        <div class="d-flex">
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/gif/CS.gif') }}" class="w-75">
            </div>

            <div class="col-md-6">
                <p class="h2">Customer Service</p>

                <a href="{{ route('faq') }}" class="text-decoration-none text-light">
                    <div class="rounded-3 bg-dark-third p-2 my-auto">
                        <div class="d-flex">
                            <div class="col-md-2">
                                <img src="{{ asset('images/faq/faq-search-glass.png') }}" class="w-75">
                            </div>
                            <div class="col-md-10 my-auto">
                                <div class="col-md-11">
                                    <p class="my-auto h4">FAQ</p>
                                </div>
                                <div class="col-md-12">
                                    <p class="my-auto fs-6">Kamu bisa liat-liat pertanyaan yang sering ditanyakan disini</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="discord://" target="_blank" class="text-decoration-none text-light m-1">
                    <div class="rounded-3 bg-dark-third p-3">
                        <div class="d-flex">
                            <div class="col-md-2">
                                <img src="{{ asset('images/email.png') }}" class="w-75">
                            </div>
                            <div class="col-md-10 my-auto">
                                <div class="col-md-12">
                                    <p class="my-auto h4">Email</p>
                                </div>
                                <div class="col-md-12">
                                    <p class="my-auto fs-6">Tulis pertanyaan kamu dan kirim ke email kami</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- nomor didapat dari IG KalemStore --}}
                <a href="https://wa.me/+6289659305978?text=Halo, Saya Butuh Bantuan" target="_blank" class="text-decoration-none text-light m-1">
                    <div class="rounded-3 bg-dark-third p-3">
                        <div class="d-flex">
                            <div class="col-md-2">
                                <img src="{{ asset('images/whatsapp-logo.png') }}" class="w-75">
                            </div>
                            <div class="col-md-10 my-auto">
                                <div class="col-md-12">
                                    <p class="my-auto h4">Chat Langsung</p>
                                </div>
                                <div class="col-md-12">
                                    <p class="my-auto fs-6">Chat langsung dengan CS kami</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        {{-- tengah --}}
        <div class="bg-dark-third p-3 rounded-3">
            <div class="d-flex">
                <div class="col-md-6 my-auto">
                    <p class="text-center my-auto h3 fw-bold">Terjadi kendala dengan transaksi kamu?</p>
                    <p class="text-center my-auto fs-5">Jangan sungkan kirim laporan ke kami</p>
                </div>
                <div class="col-md-6 bg-black p-3 rounded-3">

                    {{-- methodnya nanti ganti ke POST --}}
                    <form action="#form" method="GET" id="form">
                        @csrf

                        <p class="h4">Formulir Laporan</p>
                        <p class="fs-6 text-muted">Silahkan Buat Laporan Kamu di Formulir Berikut</p>

                        <label class="mt-2" for="#report-category">Tipe Laporan</label>

                        <select class="btn bg-white rounded-3 col-12 py-2 text-start text-dark fs-6" name="report-category">
                            <option selected disabled hidden>Silahkan Pilih Kategori Laporanmu</option>
                            <option value="Masukan">Masukan / Feedback</option>
                            <option value="Kendala Akun">Kendala Akun</option>
                            <option value="Kendala Transaksi">Kendala Transaksi</option>
                        </select>

                        <label class="mt-2" for="#nama">Nama</label>
                        <input type="text" class="btn bg-white rounded-3 col-12 py-2 text-start text-dark fs-6" name="nama" id="nama" placeholder="Masukkan Nama Kamu Disini..">
                        
                        <label class="mt-3" for="#phone">No. Whatsapp</label>
                        <input type="text" class="btn bg-white rounded-3 col-12 py-2 text-start text-dark fs-6" name="phone" id="phone" placeholder="Masukkan Nomor WA Kamu Disini..">
                        
                        <label class="mt-3" for="#question">Pertanyaan</label>
                        <textarea name="question" class="btn bg-white rounded-3 col-12 py-2 text-start text-dark fs-6" placeholder="Tulis Pertanyaanmu Disini.."></textarea>
                        
                        {{-- <button class="col-md-12 bg-yellow mt-3 py-3 rounded-4 fs-5 fw-bold text-light">SUBMIT</button> --}}

                        <div class="text-end my-3">
                            <button type="submit" class="submitBtn col-md-4 fs-5">Kirim</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection