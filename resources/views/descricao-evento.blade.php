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
                <a href="/" class="text-red-500 font-semibold">Eventos</a>
                <a href="/login" class="text-gray-600 hover:underline hover:text-red-500">Login</a>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 md:px-0 bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Evento Banner -->
        <div class="w-full h-64 sm:h-80 md:h-80 bg-gray-300 relative overflow-hidden">
            <img src="/images/eventos/image-description.png" 
                 alt="Divertida Mente 2" 
                 class="w-full h-full object-cover md:object-fill">
        </div>
        
        <!-- Evento Content -->
        <div class="p-4 md:p-8">
            <!-- Evento Title -->
            <h1 class="text-2xl md:text-4xl font-bold text-gray-900 mb-4">DIVERTIDA MENTE 2</h1>
            
            <!-- Date, Time and Capacity -->
            <div class="mb-6 px-4 pt-4 pb-3">
                <div class="flex flex-col md:flex-row md:items-center mb-2">
                    <div class="flex items-center text-gray-700 mb-2 md:mb-0 md:mr-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>26 de abril de 2025</span>
                    </div>
                    <div class="flex items-center text-gray-700 mb-2 md:mb-0 md:mr-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>15:00 horas</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span>Capacidade: 200 pessoas</span>
                    </div>
                </div>

                <div class="">
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 mt-0.5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <div class="md:flex md:items-center md:gap-5">
                            <p class="text-gray-700 font-medium">Teatro do Prédio Cultural</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Evento Description -->
            <div>
                <h2 class="text-md font-bold text-gray-800 mb-3">DESCRIÇÃO GERAL</h2>
                <div class="prose text-gray-600 text-justify">
                    <p class="mb-4">
                        Divertidamente 2 marca a sequência da famosa história de Riley (Kaitlyn Dias). Com um salto temporal, a garota agora se encontra mais velha, com 13 anos de idade, passando pela tão temida pré-adolescência. Junto com o amadurecimento, a sala de controle mental da jovem também está passando por uma demolição para dar lugar a algo totalmente inesperado: novas emoções. As já conhecidas, Alegria (Amy Poehler), Tristeza (Phyllis Smith), Raiva (Lewis Black), Medo (Tony Hale) e Nojinho (Liza Lapira), que desde quando Riley é bebê, eles predominam a central de controle da garota em uma operação bem-sucedida, tendo algumas falhas no percurso como foi apresentado no primeiro filme. As antigas emoções não têm certeza de como se sentir e com agir quando novos inquilinos chegam ao local, sendo um deles a tão temida Ansiedade (Maya Hawke). Inveja (Ayo Edebiri), Tédio (Adèle Exarchopoulos) e Vergonha (Paul Walter Hauser) integrarão juntos com a Ansiedade na mente de Riley, assim como a Nostalgia (June Squibb) que aparecerá também.
                    </p>
                    <p class="mb-4">
                        Os ingressos são LIMITADÍSSIMOS e essa é sua chance de assistir um filme muito legal! Não deixe para última hora!
                    </p>
                    <p class="mb-4 font-bold">
                        Garanta já o seu ingresso de forma antecipada!
                    </p>
                    <p class="mb-4">
                        Crianças menores de 12 anos deverão estar acompanhadas de um responsável.
                    </p>
                    <p class="mb-4">
                        INFORMAÇÕES COMPLEMENTARES:
                    </p>
                    <p class="mb-4">
                        Os ingressos serão disponibilizados a partir do dia 20 de abril às 10h na coordenação do CÉU TRÊS LAGOS.
                    </p>
                    <p class="mb-4">
                        Cada pessoa poderá retirar no máximo, 4 ingressos para assistir ao filme.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>


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
</body>

</html>
