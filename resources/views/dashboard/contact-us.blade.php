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
                <p class="h2">Customer Services</p>

                <a href="{{ route('faq') }}" class="text-decoration-none text-light">
                    <div class="card bg-dark-secondary p-2 my-auto">
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
                <a href="{{ route('faq') }}" class="text-decoration-none text-light m-1">
                    <div class="card bg-dark-secondary p-3">
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
                <a href="{{ route('faq') }}" class="text-decoration-none text-light m-1">
                    <div class="card bg-dark-secondary p-3">
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
        <div class="bg-dark-secondary p-3 rounded-3">
            <div class="d-flex">
                <div class="col-md-6">
                    <p class="text-center my-auto h5">Terjadi kendala dengan transaksi kamu?</p>
                    <p class="text-center my-auto fs-6">Jangan sungkan kirim laporan ke kami</p>
                </div>
                <div class="col-md-6 bg-black p-3 rounded-3">
                    <div class="">
                        <p class="h4">Formulir Laporan</p>

                        <label class="mt-3" for="#nama">Nama</label>
                        <input type="text" class="btn bg-white rounded-3 col-12 py-2 text-start text-dark fs-5" name="nama" id="nama" placeholder="Masukkan Nama Kamu Disini..">
                        
                        <label class="mt-3" for="#phone">No. Whatsapp</label>
                        <input type="text" class="btn bg-white rounded-3 col-12 py-2 text-start text-dark fs-5" name="phone" id="phone" placeholder="Masukkan Nomor WA Kamu Disini..">
                        
                        <label class="mt-3" for="#question">Pertanyaan</label>
                        <textarea name="question" class="btn bg-white rounded-3 col-12 py-2 text-start text-dark fs-5"></textarea>
                        
                        {{-- <button class="col-md-12 bg-yellow mt-3 py-3 rounded-4 fs-5 fw-bold text-light">SUBMIT</button> --}}

                        <button class="submitBtn">
                            Submit
                            <svg fill="white" viewBox="0 0 448 512" height="1em" class="arrow"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path></svg>
                          </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection