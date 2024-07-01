@extends('layouts.navbar')
@section('content')
    
<div class="d-flex">
    <div class="col-md-2">
        @include('layouts.sidebar')
    </div>
    <div class="col-md-10 bg-black">
        <div class="p-5">
            <div>
                <p class="text-center my-auto text-yellow fw-bold">FAQ</p>
                <p class="text-center h4">Frequently Ask Question</p> 
                <p class="text-center">Pertanyaan Yang Sering Ditanyakan</p>
            </div>

            {{-- start accordion --}}
            <div class="d-flex">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/faq/faq-search-glass.png') }}" class="w-75 animated-zoom" alt="question mark icon">
                </div>
                <div class="col-md-6 mx-auto my-auto">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="accordion accordion-flush my-2" id="question-{{ $i }}">
                            <div class="accordion-item rounded-4 bg-dark-secondary">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-{{ $i }}" aria-expanded="false" aria-controls="flush-collapse-{{ $i }}">
                                    Apa Keuntungan Top Up Disini? [{{ $i }}]
                                    </button>
                                </h2>
                                <div id="flush-collapse-{{ $i }}" class="accordion-collapse collapse text-light" data-bs-parent="#question-{{ $i }}">
                                    <div class="accordion-body">Paling murah paling mantap [{{ $i }}].</div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            {{-- end accordion --}}

        </div>
    </div>
</div>

@endsection