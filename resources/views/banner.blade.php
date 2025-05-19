@extends('layout')

@section('banner')
    <section class="hidden md:block text-center w-100 px-10 py-1">
        <div class="relative overflow-hidden" id="carousel">
            <!-- Slides do Carrossel -->
            <div class="carousel-container relative w-full h-64 md:h-64 overflow-hidden">
                <!-- Slide 1 -->
                <div class="carousel-slide absolute inset-0 w-full h-full transition-opacity duration-500 opacity-100">
                    <div class="absolute inset-0 z-0">
                        <img src="/images/banner/banner.png" alt="Banner 1" class="w-full h-24 md:h-64 max-h-64 object-cover">
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide absolute inset-0 w-full h-full transition-opacity duration-500 opacity-100">
                    <div class="absolute inset-0 z-0">
                        <img src="https://images.unsplash.com/photo-1504805572947-34fad45aed93?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Slide 2" class="w-full h-24 md:h-64 max-h-64 object-cover" />
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide absolute inset-0 w-full h-full transition-opacity duration-500 opacity-100">
                    <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Slide 3" class="w-full h-24 md:h-64 max-h-64 object-cover" />
                    </div>
                </div>
            </div>

            <!-- Controles do Carrossel -->
            <button class="absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-white/30 hover:bg-white/50 text-white rounded-full p-2 focus:outline-none" id="prevBtn">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button class="absolute right-4 top-1/2 -translate-y-1/2 z-20 bg-white/30 hover:bg-white/50 text-white rounded-full p-2 focus:outline-none" id="nextBtn">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Indicadores do Carrossel -->
            <div class="absolute bottom-5 left-1/2 -translate-x-1/2 z-20 flex space-x-2">
                <button class="w-3 h-3 rounded-full bg-white opacity-100 focus:outline-none" data-index="0"></button>
                <button class="w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none" data-index="1"></button>
                <button class="w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none" data-index="2"></button>
            </div>
        </div>
    </section>
@endsection