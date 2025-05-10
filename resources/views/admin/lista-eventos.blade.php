<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Listagem dos eventos</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .menu {
            transition: transform 0.3s ease-in-out;
        }

        .menu-open {
            transform: translateX(0%);
        }

        .menu-closed {
            transform: translateX(100%);
        }

        .backdrop {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 10;
            transition: opacity 0.3s ease;
            opacity: 0;
            pointer-events: none;
        }

        .backdrop-visible {
            opacity: 1;
            pointer-events: auto;
        }

        .menu-wrapper {
            position: relative;
            z-index: 99999;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen">

    <header class="bg-white shadow mb-5">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a href="/" title="Céu Três Lagos"><img src="/images/logo-prefeitura.png" alt="Prefeitura de SP" class="h-10"></a>
            </div>

            <div class="hidden md:block space-x-4">
                <a href="lista-eventos" class="text-gray-500 hover:underline">Home</a>
                <a href="cadastrar-eventos" class="text-gray-500 hover:underline">Cadastrar evento</a>
                <a href="/login" class="text-gray-600 hover:underline hover:text-red-500">Sair</a>
            </div>

            <div class="md:hidden">
                <button id="menu-toggle" class="text-3xl text-black">
                    ☰
                </button>
            </div>
        </div>

        <div id="menu" class="menu menu-closed fixed top-0 right-0 h-full w-64 bg-white text-gray-900 p-4 space-y-4 lg:hidden z-50">
            <p class="font-semibold">MENU</p>
            <ul class="mt-10 space-y-3">
                <li class=""><a href="lista-eventos" class="text-gray-500 hover:underline">Home</a></li>
                <li class=""><a href="cadastrar-eventos" class="text-gray-500 hover:underline">Cadastrar evento</a></li>
                <li class="">
                    <a href="/login" class="text-gray-600 hover:underline hover:text-red-500">Sair</a>
                </li>
            </ul>
            <button id="close-menu" class="absolute top-2 right-4 text-xl text-black">
                X
            </button>
        </div>

        <div id="backdrop" class="backdrop"></div>


    </header>


    <div class="max-w-7xl mx-auto p-4 md:p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Listagem dos eventos</h1>
        
        <div class="hidden md:block overflow-hidden bg-white shadow-md rounded-lg">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Evento</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Faixa</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data/Hora</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Capacidade</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Local</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descrição</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Evento 1 -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-20 w-16">
                                        <img class="h-20 w-16 rounded object-cover" src="/images/eventos/image-card.png" alt="Movie thumbnail">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Divertida Mente 2</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-bold text-white bg-green-700" title="LIVRE">
                                    L
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">25/04/2025</div>
                                <div class="text-sm text-neutral-800">15:00 horas</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-800">
                                200 pessoas
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-800">
                                Teatro do Prédio Cultural
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-xs truncate">Divertidamente 2 marca a sequência da famosa história de Riley (Kaitlyn Dias). Com um salto temporal, a garota agora se encontra mais velha, com 13 anos de idade, passando pela tão temida pré-adolescência. Junto com o amadurecimento, a sala de controle mental da jovem também está passando por uma demolição para dar lugar a algo totalmente inesperado: novas emoções. As já conhecidas, Alegria (Amy Poehler), Tristeza (Phyllis Smith), Raiva (Lewis Black), Medo (Tony Hale) e Nojinho (Liza Lapira), que desde quando Riley é bebê, eles predominam a central de controle da garota em uma operação bem-sucedida, tendo algumas falhas no percurso como foi apresentado no primeiro filme. As antigas emoções não têm certeza de como se sentir e com agir quando novos inquilinos chegam ao local, sendo um deles a tão temida Ansiedade (Maya Hawke). Inveja (Ayo Edebiri), Tédio (Adèle Exarchopoulos) e Vergonha (Paul Walter Hauser) integrarão juntos com a Ansiedade na mente de Riley, assim como a Nostalgia (June Squibb) que aparecerá também.</div>
                            </td>
                            <td class="flex items-center justify-between gap-3 px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-3 py-1 rounded text-xs mb-1 w-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Editar
                                </button>
                                <a href="/descricao/1" target="_blank" class="bg-neutral-500 hover:bg-neutral-600 text-white px-3 py-1 rounded text-xs mb-1 w-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                    Abrir pag
                                </a>
                                <div class="flex items-center justify-between">
                                    <button class="relative inline-flex h-6 w-11 items-center rounded-full bg-green-600 focus:outline-none">
                                        <span class="sr-only">Toggle active state</span>
                                        <span class="inline-block h-4 w-4 transform rounded-full bg-white transition translate-x-6"></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        
                        <!-- Evento 2 -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-20 w-16">
                                        <img class="h-20 w-16 rounded object-cover" src="/images/eventos/image-card.png" alt="Movie thumbnail">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Divertida Mente 2</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-bold text-white bg-black" title="+18">
                                    +18
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">25/04/2025</div>
                                <div class="text-sm text-neutral-800">15:00 horas</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-800">
                                200 pessoas
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-800">
                                Teatro do Prédio Cultural
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-xs truncate">Divertidamente 2 marca a sequência da famosa história de Riley (Kaitlyn Dias). Com um salto temporal, a garota agora se encontra mais velha, com 13 anos de idade, passando pela tão temida pré-adolescência. Junto com o amadurecimento, a sala de controle mental da jovem também está passando por uma demolição para dar lugar a algo totalmente inesperado: novas emoções. As já conhecidas, Alegria (Amy Poehler), Tristeza (Phyllis Smith), Raiva (Lewis Black), Medo (Tony Hale) e Nojinho (Liza Lapira), que desde quando Riley é bebê, eles predominam a central de controle da garota em uma operação bem-sucedida, tendo algumas falhas no percurso como foi apresentado no primeiro filme. As antigas emoções não têm certeza de como se sentir e com agir quando novos inquilinos chegam ao local, sendo um deles a tão temida Ansiedade (Maya Hawke). Inveja (Ayo Edebiri), Tédio (Adèle Exarchopoulos) e Vergonha (Paul Walter Hauser) integrarão juntos com a Ansiedade na mente de Riley, assim como a Nostalgia (June Squibb) que aparecerá também.</div>
                            </td>
                            <td class="flex items-center justify-between gap-3 px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-3 py-1 rounded text-xs mb-1 w-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    Editar
                                </button>
                                <a href="https://example.com/movie/matrix" target="_blank" class="bg-neutral-500 hover:bg-neutral-600  text-white px-3 py-1 rounded text-xs mb-1 w-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                    Abrir pag
                                </a>
                                <div class="flex items-center justify-between">
                                    <button class="relative inline-flex h-6 w-11 items-center rounded-full bg-red-600 focus:outline-none">
                                        <span class="sr-only">Toggle active state</span>
                                        <span class="inline-block h-4 w-4 transform rounded-full bg-white transition translate-x-1"></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        
                        <!-- Evento 3 -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-20 w-16">
                                        <img class="h-20 w-16 rounded object-cover" src="/images/eventos/image-card.png" alt="Movie thumbnail">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Divertida Mente 2</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-bold text-white bg-red-700" title="16 ANOS">
                                    16
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">25/04/2025</div>
                                <div class="text-sm text-neutral-800">15:00 horas</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-800">
                                200 pessoas
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-neutral-800">
                                Teatro do Prédio Cultural
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-xs truncate">
                                    Divertidamente 2 marca a sequência da famosa história de Riley (Kaitlyn Dias). Com um salto temporal, a garota agora se encontra mais velha, com 13 anos de idade, passando pela tão temida pré-adolescência. Junto com o amadurecimento, a sala de controle mental da jovem também está passando por uma demolição para dar lugar a algo totalmente inesperado: novas emoções. As já conhecidas, Alegria (Amy Poehler), Tristeza (Phyllis Smith), Raiva (Lewis Black), Medo (Tony Hale) e Nojinho (Liza Lapira), que desde quando Riley é bebê, eles predominam a central de controle da garota em uma operação bem-sucedida, tendo algumas falhas no percurso como foi apresentado no primeiro filme. As antigas emoções não têm certeza de como se sentir e com agir quando novos inquilinos chegam ao local, sendo um deles a tão temida Ansiedade (Maya Hawke). Inveja (Ayo Edebiri), Tédio (Adèle Exarchopoulos) e Vergonha (Paul Walter Hauser) integrarão juntos com a Ansiedade na mente de Riley, assim como a Nostalgia (June Squibb) que aparecerá também.

                                    Os ingressos são LIMITADÍSSIMOS e essa é sua chance de assistir um filme muito legal! Não deixe para última hora!

                                    Garanta já o seu ingresso de forma antecipada!

                                    Crianças menores de 12 anos deverão estar acompanhadas de um responsável.

                                    INFORMAÇÕES COMPLEMENTARES:

                                    Os ingressos serão disponibilizados a partir do dia 20 de abril às 10h na coordenação do CÉU TRÊS LAGOS.

                                    Cada pessoa poderá retirar no máximo, 4 ingressos para assistir ao filme.
                                </div>
                            </td>
                            <td class="flex items-center justify-between gap-3 px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-3 py-1 rounded text-xs mb-1 w-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Editar
                                </button>
                                <a href="/descricao/1" target="_blank" class="bg-neutral-500 hover:bg-neutral-600 text-white px-3 py-1 rounded text-xs mb-1 w-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                    Abrir pag
                                </a>
                                <div class="flex items-center justify-between">
                                    <button class="relative inline-flex h-6 w-11 items-center rounded-full bg-green-500 focus:outline-none">
                                        <span class="sr-only">Toggle active state</span>
                                        <span class="inline-block h-4 w-4 transform rounded-full bg-white transition translate-x-6"></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="md:hidden space-y-4">
            <!-- Evento Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-4">
                    <div class="flex items-start">
                        <img class="h-24 w-20 rounded object-cover" src="/images/eventos/image-card.png" alt="Movie thumbnail">
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900">Divertida Mente 2</h3>
                            <span class="px-2 inline-flex text-xs leading-5 font-bold text-white bg-green-700">L</span>
                            <div class="mt-1 text-sm text-gray-600">26/04/2025 às 15:00</div>
                            <div class="text-sm text-gray-600">Capacidade: 200 pessoas</div>
                            <div class="text-sm text-gray-600">Teatro do Prédio Cultural</div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="text-sm text-gray-700 truncate">
                            Divertidamente 2 marca a sequência da famosa história de Riley (Kaitlyn Dias). Com um salto temporal, a garota agora se encontra mais velha, com 13 anos de idade, passando pela tão temida pré-adolescência. Junto com o amadurecimento, a sala de controle mental da jovem também está passando por uma demolição para dar lugar a algo totalmente inesperado: novas emoções. As já conhecidas, Alegria (Amy Poehler), Tristeza (Phyllis Smith), Raiva (Lewis Black), Medo (Tony Hale) e Nojinho (Liza Lapira), que desde quando Riley é bebê, eles predominam a central de controle da garota em uma operação bem-sucedida, tendo algumas falhas no percurso como foi apresentado no primeiro filme. As antigas emoções não têm certeza de como se sentir e com agir quando novos inquilinos chegam ao local, sendo um deles a tão temida Ansiedade (Maya Hawke). Inveja (Ayo Edebiri), Tédio (Adèle Exarchopoulos) e Vergonha (Paul Walter Hauser) integrarão juntos com a Ansiedade na mente de Riley, assim como a Nostalgia (June Squibb) que aparecerá também.
                                    
                            Os ingressos são LIMITADÍSSIMOS e essa é sua chance de assistir um filme muito legal! Não deixe para última hora!

                            Garanta já o seu ingresso de forma antecipada!

                            Crianças menores de 12 anos deverão estar acompanhadas de um responsável.

                            INFORMAÇÕES COMPLEMENTARES:

                            Os ingressos serão disponibilizados a partir do dia 20 de abril às 10h na coordenação do CÉU TRÊS LAGOS.

                            Cada pessoa poderá retirar no máximo, 4 ingressos para assistir ao filme.
                        </p>
                    </div>
                    <div class="mt-4 flex space-x-2">
                        <button class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-3 py-1 rounded text-xs flex-1 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Editar
                        </button>
                        <a href="/descricao/1" target="_blank" class="bg-neutral-500 hover:bg-neutral-600 text-white px-3 py-1 rounded text-xs flex-1 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Abrir pág
                        </a>
                        <div class="flex items-center justify-between">
                            <button class="relative inline-flex h-6 w-11 items-center rounded-full bg-green-500 focus:outline-none">
                                <span class="sr-only">Toggle active state</span>
                                <span class="inline-block h-4 w-4 transform rounded-full bg-white transition translate-x-6"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Evento Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-4">
                    <div class="flex items-start">
                        <img class="h-24 w-20 rounded object-cover" src="/images/eventos/image-card.png" alt="Movie thumbnail">
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900">Divertida Mente 2</h3>
                            <span class="px-2 inline-flex text-xs leading-5 font-bold text-white bg-black">+18</span>
                            <div class="mt-1 text-sm text-gray-600">26/04/2025 às 15:00</div>
                            <div class="text-sm text-gray-600">Capacidade: 200 pessoas</div>
                            <div class="text-sm text-gray-600">Teatro do Prédio Cultural</div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="text-sm text-gray-700 truncate">
                            Divertidamente 2 marca a sequência da famosa história de Riley (Kaitlyn Dias). Com um salto temporal, a garota agora se encontra mais velha, com 13 anos de idade, passando pela tão temida pré-adolescência. Junto com o amadurecimento, a sala de controle mental da jovem também está passando por uma demolição para dar lugar a algo totalmente inesperado: novas emoções. As já conhecidas, Alegria (Amy Poehler), Tristeza (Phyllis Smith), Raiva (Lewis Black), Medo (Tony Hale) e Nojinho (Liza Lapira), que desde quando Riley é bebê, eles predominam a central de controle da garota em uma operação bem-sucedida, tendo algumas falhas no percurso como foi apresentado no primeiro filme. As antigas emoções não têm certeza de como se sentir e com agir quando novos inquilinos chegam ao local, sendo um deles a tão temida Ansiedade (Maya Hawke). Inveja (Ayo Edebiri), Tédio (Adèle Exarchopoulos) e Vergonha (Paul Walter Hauser) integrarão juntos com a Ansiedade na mente de Riley, assim como a Nostalgia (June Squibb) que aparecerá também.
                        </p>
                    </div>
                    <div class="mt-4 flex space-x-2">
                        <button class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-3 py-1 rounded text-xs flex-1 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Editar
                        </button>
                        <a href="/descricao/1" target="_blank" class="bg-neutral-500 hover:bg-neutral-600 text-white px-3 py-1 rounded text-xs flex-1 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Abrir pág
                        </a>
                        <div class="flex items-center justify-between">
                            <button class="relative inline-flex h-6 w-11 items-center rounded-full bg-red-500 focus:outline-none">
                                <span class="sr-only">Toggle active state</span>
                                <span class="inline-block h-4 w-4 transform rounded-full bg-white transition translate-x-1"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Evento Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-4">
                    <div class="flex items-start">
                        <img class="h-24 w-20 rounded object-cover" src="/images/eventos/image-card.png" alt="Movie thumbnail">
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-gray-900">Divertida Mente 2</h3>
                            <span class="px-2 inline-flex text-xs leading-5 font-bold text-white bg-red-700">16</span>
                            <div class="mt-1 text-sm text-gray-600">26/04/2025 às 15:00</div>
                            <div class="text-sm text-gray-600">Capacidade: 200 pessoas</div>
                            <div class="text-sm text-gray-600">Teatro do Prédio Cultural</div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="text-sm text-gray-700 truncate">
                            Divertidamente 2 marca a sequência da famosa história de Riley (Kaitlyn Dias). Com um salto temporal, a garota agora se encontra mais velha, com 13 anos de idade, passando pela tão temida pré-adolescência. Junto com o amadurecimento, a sala de controle mental da jovem também está passando por uma demolição para dar lugar a algo totalmente inesperado: novas emoções. As já conhecidas, Alegria (Amy Poehler), Tristeza (Phyllis Smith), Raiva (Lewis Black), Medo (Tony Hale) e Nojinho (Liza Lapira), que desde quando Riley é bebê, eles predominam a central de controle da garota em uma operação bem-sucedida, tendo algumas falhas no percurso como foi apresentado no primeiro filme. As antigas emoções não têm certeza de como se sentir e com agir quando novos inquilinos chegam ao local, sendo um deles a tão temida Ansiedade (Maya Hawke). Inveja (Ayo Edebiri), Tédio (Adèle Exarchopoulos) e Vergonha (Paul Walter Hauser) integrarão juntos com a Ansiedade na mente de Riley, assim como a Nostalgia (June Squibb) que aparecerá também.
                        </p>
                    </div>
                    <div class="mt-4 flex space-x-2">
                        <button class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-3 py-1 rounded text-xs flex-1 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Editar
                        </button>
                        <a href="/descricao/1" target="_blank" class="bg-neutral-500 hover:bg-neutral-600 text-white px-3 py-1 rounded text-xs flex-1 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Abrir pág
                        </a>
                        <div class="flex items-center justify-between">
                            <button class="relative inline-flex h-6 w-11 items-center rounded-full bg-green-500 focus:outline-none">
                                <span class="sr-only">Toggle active state</span>
                                <span class="inline-block h-4 w-4 transform rounded-full bg-white transition translate-x-6"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="w-full text-white pt-5 mt-4">
        <div class="bg-[#3D3D3D] text-2sm md:text-sm mx-auto px-4">
            <div class="border-t border-black text-center py-2">
                <p class="text-xs md:text-sm">Céu Três Lagos - &copy<?=date('Y');?></p>
            </div>
        </div>
    </footer>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('menu');
        const closeMenu = document.getElementById('close-menu');
        const backdrop = document.getElementById('backdrop');
        const menuWrapper = document.getElementById('menu-wrapper');

        menuToggle.addEventListener('click', () => {
            menu.classList.toggle('menu-open');
            menu.classList.toggle('menu-closed');
            backdrop.classList.add('backdrop-visible');
        });

        closeMenu.addEventListener('click', () => {
            menu.classList.toggle('menu-open');
            menu.classList.toggle('menu-closed');
            backdrop.classList.remove('backdrop-visible');
        });

        backdrop.addEventListener('click', () => {
            menu.classList.toggle('menu-open');
            menu.classList.toggle('menu-closed');
            backdrop.classList.remove('backdrop-visible');
        });
    </script>
</body>

</html>