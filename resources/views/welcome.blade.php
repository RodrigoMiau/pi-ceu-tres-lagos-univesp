<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projeto Integrador - PI</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="">
    <!-- Header -->
    <header class="bg-white shadow mb-5">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a href="/" title="Céu Três Lagos"><img src="/images/logo-prefeitura.png" alt="Prefeitura de SP" class="h-10"></a>
            </div>
            <input type="text" placeholder="CÉU TRÊS LAGOS: Pesquisar" class="hidden md:block md:px-4 md:py-2 md:border md:rounded-xl md:w-3/5">
            <div class="space-x-4">
                <a href="#eventos-hoje" class="text-red-500 font-semibold">Eventos</a>
                <a href="/login" class="text-gray-600 hover:underline hover:text-red-500">Login</a>
            </div>
        </div>
    </header>

    <!-- Banner -->
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

    <!-- Eventos -->
    <main class="max-w-7xl mx-auto px-4 pt-1 md:pt-10">
        <!-- Eventos Hoje -->
        <section class="mb-10" id="eventos-hoje">
            <h2 class="text-2xl font-bold py-3 mb-4 sticky top-0 bg-white w-full z-50">Eventos Hoje</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                
                <div class="bg-[#F5F5F5] rounded shadow-xl overflow-hidden hover:shadow-2xl">
                    <a href="/descricao/1" alt="Divertida Mente 2">
                        <img src="/images/eventos/image-card.png" alt="Divertida Mente 2" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <div class="block md:hidden">
                                <h3 class="font-bold text-2xl text-center pb-2">DIVERTIDA MENTE 2</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-lg">19 Abril 2025</p>
                                    <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                </div>
                                <p class="">Abertura: 14:00</p>
                                <p class="">Ocupação: 200 pessoas</p>
                                <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                            </div>

                            <div class="hidden md:flex md:flex-col md:items-start">
                                <h3 class="font-bold text-2xl mb-2">DIVERTIDA MENTE 2</h3>
                                <div class="md:flex md:items-start md:justify-between gap-2">
                                    <div class="flex flex-col">
                                        <p class="px-6 py-1 bg-[#3F3F3F] rounded-t-xl text-xl font-bold text-white text-center">FEV</p>
                                        <p class="px-6 pb-2 text-center rounded-b-xl bg-white">
                                            <span class="font-bold text-3xl">15</span><br />
                                            <span class="text-xl">SAB</span>
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                        <p class="">Abertura: 13:00</p>
                                        <p class="">Ocupação: 200 pessoas</p>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                                    <p class="text-sm text-justify">Divertida Mente 2 é uma animação da Disney e Pixar que se passa na mente de Riley, uma menina que está entrando na adolescência. O filme most... <span class="text-[#006699]">ver mais</span></p>
                                </div>
                            </div> 
                        </div>
                    </a>
                </div>

                <div class="bg-[#F5F5F5] rounded shadow-xl overflow-hidden hover:shadow-2xl">
                    <a href="/descricao/1" alt="Divertida Mente 2">
                        <img src="/images/eventos/image-card.png" alt="Divertida Mente 2" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <div class="block md:hidden">
                                <h3 class="font-bold text-2xl text-center pb-2">DIVERTIDA MENTE 2</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-lg">19 Abril 2025</p>
                                    <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                </div>
                                <p class="">Abertura: 14:00</p>
                                <p class="">Ocupação: 200 pessoas</p>
                                <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                            </div>

                            <div class="hidden md:flex md:flex-col md:items-start">
                                <h3 class="font-bold text-2xl mb-2">DIVERTIDA MENTE 2</h3>
                                <div class="md:flex md:items-start md:justify-between gap-2">
                                    <div class="flex flex-col">
                                        <p class="px-6 py-1 bg-[#3F3F3F] rounded-t-xl text-xl font-bold text-white text-center">FEV</p>
                                        <p class="px-6 pb-2 text-center rounded-b-xl bg-white">
                                            <span class="font-bold text-3xl">15</span><br />
                                            <span class="text-xl">SAB</span>
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                        <p class="">Abertura: 13:00</p>
                                        <p class="">Ocupação: 200 pessoas</p>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                                    <p class="text-sm text-justify">Divertida Mente 2 é uma animação da Disney e Pixar que se passa na mente de Riley, uma menina que está entrando na adolescência. O filme most... <span class="text-[#006699]">ver mais</span></p>
                                </div>
                            </div> 
                        </div>
                    </a>
                </div>

                <div class="bg-[#F5F5F5] rounded shadow-xl overflow-hidden hover:shadow-2xl">
                    <a href="/descricao/1" alt="Divertida Mente 2">
                        <img src="/images/eventos/image-card.png" alt="Divertida Mente 2" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <div class="block md:hidden">
                                <h3 class="font-bold text-2xl text-center pb-2">DIVERTIDA MENTE 2</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-lg">19 Abril 2025</p>
                                    <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                </div>
                                <p class="">Abertura: 14:00</p>
                                <p class="">Ocupação: 200 pessoas</p>
                                <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                            </div>

                            <div class="hidden md:flex md:flex-col md:items-start">
                                <h3 class="font-bold text-2xl mb-2">DIVERTIDA MENTE 2</h3>
                                <div class="md:flex md:items-start md:justify-between gap-2">
                                    <div class="flex flex-col">
                                        <p class="px-6 py-1 bg-[#3F3F3F] rounded-t-xl text-xl font-bold text-white text-center">FEV</p>
                                        <p class="px-6 pb-2 text-center rounded-b-xl bg-white">
                                            <span class="font-bold text-3xl">15</span><br />
                                            <span class="text-xl">SAB</span>
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                        <p class="">Abertura: 13:00</p>
                                        <p class="">Ocupação: 200 pessoas</p>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                                    <p class="text-sm text-justify">Divertida Mente 2 é uma animação da Disney e Pixar que se passa na mente de Riley, uma menina que está entrando na adolescência. O filme most... <span class="text-[#006699]">ver mais</span></p>
                                </div>
                            </div> 
                        </div>
                    </a>
                </div>

            </div>
        </section>

        <!-- Próximos Eventos -->
        <section class="mb-10">
            <h2 class="text-2xl font-bold py-3 mb-4 sticky top-0 bg-white w-full z-50">Próximos Eventos</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="bg-[#F5F5F5] rounded shadow-xl overflow-hidden hover:shadow-2xl">
                    <a href="/descricao/1" alt="Divertida Mente 2">
                        <img src="/images/eventos/image-card.png" alt="Divertida Mente 2" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <div class="block md:hidden">
                                <h3 class="font-bold text-2xl text-center pb-2">DIVERTIDA MENTE 2</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-lg">19 Abril 2025</p>
                                    <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                </div>
                                <p class="">Abertura: 14:00</p>
                                <p class="">Ocupação: 200 pessoas</p>
                                <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                            </div>

                            <div class="hidden md:flex md:flex-col md:items-start">
                                <h3 class="font-bold text-2xl mb-2">DIVERTIDA MENTE 2</h3>
                                <div class="md:flex md:items-start md:justify-between gap-2">
                                    <div class="flex flex-col">
                                        <p class="px-6 py-1 bg-[#3F3F3F] rounded-t-xl text-xl font-bold text-white text-center">FEV</p>
                                        <p class="px-6 pb-2 text-center rounded-b-xl bg-white">
                                            <span class="font-bold text-3xl">15</span><br />
                                            <span class="text-xl">SAB</span>
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                        <p class="">Abertura: 13:00</p>
                                        <p class="">Ocupação: 200 pessoas</p>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                                    <p class="text-sm text-justify">Divertida Mente 2 é uma animação da Disney e Pixar que se passa na mente de Riley, uma menina que está entrando na adolescência. O filme most... <span class="text-[#006699]">ver mais</span></p>
                                </div>
                            </div> 
                        </div>
                    </a>
                </div>

                <div class="bg-[#F5F5F5] rounded shadow-xl overflow-hidden hover:shadow-2xl">
                    <a href="/descricao/1" alt="Divertida Mente 2">
                        <img src="/images/eventos/image-card.png" alt="Divertida Mente 2" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <div class="block md:hidden">
                                <h3 class="font-bold text-2xl text-center pb-2">DIVERTIDA MENTE 2</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-lg">19 Abril 2025</p>
                                    <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                </div>
                                <p class="">Abertura: 14:00</p>
                                <p class="">Ocupação: 200 pessoas</p>
                                <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                            </div>

                            <div class="hidden md:flex md:flex-col md:items-start">
                                <h3 class="font-bold text-2xl mb-2">DIVERTIDA MENTE 2</h3>
                                <div class="md:flex md:items-start md:justify-between gap-2">
                                    <div class="flex flex-col">
                                        <p class="px-6 py-1 bg-[#3F3F3F] rounded-t-xl text-xl font-bold text-white text-center">FEV</p>
                                        <p class="px-6 pb-2 text-center rounded-b-xl bg-white">
                                            <span class="font-bold text-3xl">15</span><br />
                                            <span class="text-xl">SAB</span>
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                        <p class="">Abertura: 13:00</p>
                                        <p class="">Ocupação: 200 pessoas</p>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                                    <p class="text-sm text-justify">Divertida Mente 2 é uma animação da Disney e Pixar que se passa na mente de Riley, uma menina que está entrando na adolescência. O filme most... <span class="text-[#006699]">ver mais</span></p>
                                </div>
                            </div> 
                        </div>
                    </a>
                </div>

                <div class="bg-[#F5F5F5] rounded shadow-xl overflow-hidden hover:shadow-2xl">
                    <a href="/descricao/1" alt="Divertida Mente 2">
                        <img src="/images/eventos/image-card.png" alt="Divertida Mente 2" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <div class="block md:hidden">
                                <h3 class="font-bold text-2xl text-center pb-2">DIVERTIDA MENTE 2</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-lg">19 Abril 2025</p>
                                    <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                </div>
                                <p class="">Abertura: 14:00</p>
                                <p class="">Ocupação: 200 pessoas</p>
                                <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                            </div>

                            <div class="hidden md:flex md:flex-col md:items-start">
                                <h3 class="font-bold text-2xl mb-2">DIVERTIDA MENTE 2</h3>
                                <div class="md:flex md:items-start md:justify-between gap-2">
                                    <div class="flex flex-col">
                                        <p class="px-6 py-1 bg-[#3F3F3F] rounded-t-xl text-xl font-bold text-white text-center">FEV</p>
                                        <p class="px-6 pb-2 text-center rounded-b-xl bg-white">
                                            <span class="font-bold text-3xl">15</span><br />
                                            <span class="text-xl">SAB</span>
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                        <p class="">Abertura: 13:00</p>
                                        <p class="">Ocupação: 200 pessoas</p>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                                    <p class="text-sm text-justify">Divertida Mente 2 é uma animação da Disney e Pixar que se passa na mente de Riley, uma menina que está entrando na adolescência. O filme most... <span class="text-[#006699]">ver mais</span></p>
                                </div>
                            </div> 
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Eventos Encerrados -->
        <section class="mb-10">
            <h2 class="text-2xl font-bold py-3 sticky top-0 bg-white w-full z-50">Eventos Encerrados</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <div class="bg-[#F5F5F5] rounded shadow-xl overflow-hidden opacity-60 transition-opacity	hover:opacity-100 hover:shadow-2xl">
                    <a href="/descricao/1" alt="Divertida Mente 2">
                        <img src="/images/eventos/image-card.png" alt="Divertida Mente 2" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <div class="block md:hidden">
                                <h3 class="font-bold text-2xl text-center pb-2">DIVERTIDA MENTE 2</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-lg">19 Abril 2025</p>
                                    <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                </div>
                                <p class="">Abertura: 14:00</p>
                                <p class="">Ocupação: 200 pessoas</p>
                                <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                            </div>

                            <div class="hidden md:flex md:flex-col md:items-start">
                                <h3 class="font-bold text-2xl mb-2">DIVERTIDA MENTE 2</h3>
                                <div class="md:flex md:items-start md:justify-between gap-2">
                                    <div class="flex flex-col">
                                        <p class="px-6 py-1 bg-[#3F3F3F] rounded-t-xl text-xl font-bold text-white text-center">FEV</p>
                                        <p class="px-6 pb-2 text-center rounded-b-xl bg-white">
                                            <span class="font-bold text-3xl">15</span><br />
                                            <span class="text-xl">SAB</span>
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                        <p class="">Abertura: 13:00</p>
                                        <p class="">Ocupação: 200 pessoas</p>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                                    <p class="text-sm text-justify">Divertida Mente 2 é uma animação da Disney e Pixar que se passa na mente de Riley, uma menina que está entrando na adolescência. O filme most... <span class="text-[#006699]">ver mais</span></p>
                                </div>
                            </div> 
                        </div>
                    </a>
                </div>

                <div class="bg-[#F5F5F5] rounded shadow-xl overflow-hidden opacity-60 transition-opacity hover:opacity-100 hover:shadow-2xl">
                    <a href="/descricao/1" alt="Divertida Mente 2">
                        <img src="/images/eventos/image-card.png" alt="Divertida Mente 2" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <div class="block md:hidden">
                                <h3 class="font-bold text-2xl text-center pb-2">DIVERTIDA MENTE 2</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-lg">19 Abril 2025</p>
                                    <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                </div>
                                <p class="">Abertura: 14:00</p>
                                <p class="">Ocupação: 200 pessoas</p>
                                <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                            </div>

                            <div class="hidden md:flex md:flex-col md:items-start">
                                <h3 class="font-bold text-2xl mb-2">DIVERTIDA MENTE 2</h3>
                                <div class="md:flex md:items-start md:justify-between gap-2">
                                    <div class="flex flex-col">
                                        <p class="px-6 py-1 bg-[#3F3F3F] rounded-t-xl text-xl font-bold text-white text-center">FEV</p>
                                        <p class="px-6 pb-2 text-center rounded-b-xl bg-white">
                                            <span class="font-bold text-3xl">15</span><br />
                                            <span class="text-xl">SAB</span>
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                        <p class="">Abertura: 13:00</p>
                                        <p class="">Ocupação: 200 pessoas</p>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                                    <p class="text-sm text-justify">Divertida Mente 2 é uma animação da Disney e Pixar que se passa na mente de Riley, uma menina que está entrando na adolescência. O filme most... <span class="text-[#006699]">ver mais</span></p>
                                </div>
                            </div> 
                        </div>
                    </a>
                </div>

                <div class="bg-[#F5F5F5] rounded shadow-xl overflow-hidden opacity-60 transition-opacity hover:opacity-100 hover:shadow-2xl">
                    <a href="/descricao/1" alt="Divertida Mente 2">
                        <img src="/images/eventos/image-card.png" alt="Divertida Mente 2" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <div class="block md:hidden">
                                <h3 class="font-bold text-2xl text-center pb-2">DIVERTIDA MENTE 2</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-lg">19 Abril 2025</p>
                                    <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                </div>
                                <p class="">Abertura: 14:00</p>
                                <p class="">Ocupação: 200 pessoas</p>
                                <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                            </div>

                            <div class="hidden md:flex md:flex-col md:items-start">
                                <h3 class="font-bold text-2xl mb-2">DIVERTIDA MENTE 2</h3>
                                <div class="md:flex md:items-start md:justify-between gap-2">
                                    <div class="flex flex-col">
                                        <p class="px-6 py-1 bg-[#3F3F3F] rounded-t-xl text-xl font-bold text-white text-center">FEV</p>
                                        <p class="px-6 pb-2 text-center rounded-b-xl bg-white">
                                            <span class="font-bold text-3xl">15</span><br />
                                            <span class="text-xl">SAB</span>
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <p class="text-lg">Faixa: <span class="bg-[#0C9447] text-white font-bold py-2 px-3 rounded-sm" title="Livre">L</span></p>
                                        <p class="">Abertura: 13:00</p>
                                        <p class="">Ocupação: 200 pessoas</p>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <p class="">Local: <strong>Teatro do Prédio Cultural</strong></p>
                                    <p class="text-sm text-justify truncate">Divertida Mente 2 é uma animação da Disney e Pixar que se passa na mente de Riley, uma menina que está entrando na adolescência. O filme most... <span class="text-[#006699]">ver mais</span></p>
                                </div>
                            </div> 
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Rodapé -->
    <footer class="text-white pt-5 mt-4">
        <div class="bg-[#87007E] mx-auto px-4 py-8">
            <div class="flex flex-col md:flex-row items-center justify-center gap-2 text-center">
                <h3 class=" text-2xl md:text-4xl font-bold">CÉU TRÊS LAGOS</h3>
                <div class="ml-2 text-sm text-center md:text-start">
                    <p>Rua Maria Moura da Conceição, SN - Jd. Belcito - CEP: 04855-257</p>
                    <p>Gestão: (11) 5976-5608</p>
                </div>
            </div>
        </div>
        <div class="bg-[#171717] text-sm mx-auto px-4 py-4 flex flex-col items-center text-center md:flex-row md:justify-between gap-5">
            <div class="md:w-11/12">
                <img src="/images/logo-rodape.png" alt="Divertida Mente 2" class="w-3xs h-16 object-cover">
            </div>
            <div class="hidden md:block w-[1px] h-20 bg-[#ebebeb]">&nbsp;</div>
            <div class="text-sm w-11/12">
                <h2 class="font-bold mb-3">Secretaria Municipal de Educação</h2>
                <p class="mb-5">Informações da secretaria municipal de Educação</p>
                <hr class="opacity-35 block md:hidden" />
            </div>
            <div class="hidden md:block w-[1px] h-20 bg-[#ebebeb]">&nbsp;</div>
            <div class="text-sm w-11/12">
                <h2 class="font-bold mb-3">Contatos</h2>
                <div class="flex items-center justify-center gap-1 mb-5">
                    <img src="/images/contato.png" alt="Contato" /> 
                    <p class="">156</p>
                </div>
                <hr class="opacity-35 block md:hidden" />
            </div>
            <div class="hidden md:block w-[1px] h-20 bg-[#ebebeb]">&nbsp;</div>
            <div class="text-sm w-11/12">
                <h2 class="font-bold mb-3">Redes Sociais</h2>
                <div class="flex items-center justify-center gap-5">
                    <a href="javascript:;"><img src="/images/facebook.png" alt="Facebook" /></a>
                    <a href="javascript:;"><img src="/images/instagram.png" alt="Instagram" /></a>
                    <a href="javascript:;"><img src="/images/youtube.png" alt="Youtube" /></a>
                </div>
            </div>
        </div>
        <div class="bg-[#3D3D3D] text-2sm md:text-sm mx-auto px-4">
            <div class="border-t border-black text-center py-2">
                <p class="text-xs md:text-sm">Prefeitura Municipal de São Paulo - Viaduto do Chá, 15 - Centro - CEP: 01002-020</p>
            </div>
        </div>
    </footer>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.carousel-slide');
            const indicators = document.querySelectorAll('[data-index]');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            let currentIndex = 0;
            let interval;

            function showSlide(index) {
                slides.forEach(slide => {
                    slide.classList.remove('opacity-100');
                    slide.classList.add('opacity-0');
                });
                
                indicators.forEach(indicator => {
                    indicator.classList.remove('opacity-100');
                    indicator.classList.add('opacity-50');
                });
                
                slides[index].classList.remove('opacity-0');
                slides[index].classList.add('opacity-100');
                
                indicators[index].classList.remove('opacity-50');
                indicators[index].classList.add('opacity-100');
                
                currentIndex = index;
            }

            function nextSlide() {
                let newIndex = currentIndex + 1;
                if (newIndex >= slides.length) {
                    newIndex = 0;
                }
                showSlide(newIndex);
            }

            function prevSlide() {
                let newIndex = currentIndex - 1;
                if (newIndex < 0) {
                    newIndex = slides.length - 1;
                }
                showSlide(newIndex);
            }

            nextBtn.addEventListener('click', function() {
                nextSlide();
                resetAutoplay();
            });

            prevBtn.addEventListener('click', function() {
                prevSlide();
                resetAutoplay();
            });

            indicators.forEach(indicator => {
                indicator.addEventListener('click', function() {
                    const index = parseInt(this.getAttribute('data-index'));
                    showSlide(index);
                    resetAutoplay();
                });
            });

            function startAutoplay() {
                interval = setInterval(nextSlide, 5000);
            }

            function resetAutoplay() {
                clearInterval(interval);
                startAutoplay();
            }

            startAutoplay();
        });
    </script>
    
</body>

</html>
