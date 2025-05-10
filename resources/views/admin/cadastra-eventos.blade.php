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


    <main class="max-w-7xl mx-auto p-4 md:p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Cadastrar eventos</h1>

        <div class="mx-auto bg-white rounded-lg shadow-md p-6">
        
            <form class="space-y-6">
                <div class="space-y-2">
                    <label for="bannerImage" class="block text-sm font-medium text-gray-700">Banner do Evento</label>
                    <div class="flex items-center gap-4">
                        <input type="file" id="bannerImage" name="bannerImage" accept="image/*" 
                            class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                            file:rounded-md file:border-0 file:text-sm file:font-semibold
                            file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                            onchange="previewBanner(event)">
                    </div>
                    <div id="bannerPreview" class="mt-2 hidden">
                        <img id="bannerPreviewImg" class="w-full h-48 object-cover rounded-lg border border-gray-300" alt="Banner Preview">
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="cardImage" class="block text-sm font-medium text-gray-700">Imagem do Card do Evento</label>
                    <div class="flex items-center gap-4">
                        <input type="file" id="cardImage" name="cardImage" accept="image/*" 
                            class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                            file:rounded-md file:border-0 file:text-sm file:font-semibold
                            file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                            onchange="previewCard(event)">
                    </div>

                    <div id="cardPreview" class="mt-2 hidden">
                        <img id="cardPreviewImg" class="w-40 h-48 object-cover rounded-lg border border-gray-300" alt="Card Preview">
                    </div>
                </div>

                <div>
                    <label for="nome-evento" class="block text-sm font-medium text-gray-700">Nome do Evento</label>
                    <input type="text" id="nome-evento" name="nome-evento" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border focus:border-indigo-500 focus:ring-indigo-500 outline-none" placeholder="Nome do evento">
                </div>

                <div>
                    <label for="url-evento" class="block text-sm font-medium text-gray-700">Link do Evento</label>
                    <input type="url" inputmode="url" id="url-evento" name="url-evento"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border focus:border-indigo-500 focus:ring-indigo-500 outline-none"
                        placeholder="Link do evento" readonly>
                </div>

                <div>
                    <label for="classificacao-grupo" class="block text-sm font-medium text-gray-700">Classificação</label>
                    <select id="classificacao-grupo" name="classificacao-grupo" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="" disabled selected>Classificação faixa etária</option>
                        <option value="L">LIVRE - Recomendado para todas as idades</option> <!-- VERDE -->
                        <option value="10">10 anos - Recomenda-se que crianças abaixo desta idade não assistam</option> <!-- AZUL -->
                        <option value="12">12 anos - Recomenda-se que menores de 12 anos não assistam, ou que a exibição seja feita a partir das 20h</option> <!-- AMARELO -->
                        <option value="14">14 anos - Recomenda-se que menores de 14 anos não assistam, ou que a exibição seja feita a partir das 21h</option> <!-- LARANJA -->
                        <option value="16">16 anos - Recomenda-se que menores de 16 anos não assistam, ou que a exibição seja feita a partir das 22h</option> <!-- VERMELHO -->
                        <option value="18">18 anos - Recomenda-se que menores de 18 anos não assistam, ou que a exibição seja feita a partir das 23h</option> <!-- PRETO -->
                    </select>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="data-evento" class="block text-sm font-medium text-gray-700">Data do Evento</label>
                        <input type="date" id="data-evento" name="data-evento" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border focus:border-indigo-500 focus:ring-indigo-500 outline-none">
                    </div>
                    <div>
                        <label for="hora-evento" class="block text-sm font-medium text-gray-700">Hora do Evento</label>
                        <input type="time" inputmode="numeric" id="hora-evento" name="hora-evento" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border focus:border-indigo-500 focus:ring-indigo-500 outline-none">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="capacidade-evento" class="block text-sm font-medium text-gray-700">Capacidade do Evento</label>
                        <input type="number" inputmode="numeric" id="capacidade-evento" name="capacidade-evento" min="1" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border focus:border-indigo-500 focus:ring-indigo-500 outline-none" placeholder="Capacidade do evento">
                    </div>

                    <div>
                        <label for="local-evento" class="block text-sm font-medium text-gray-700">Local do Evento</label>
                        <input type="text" id="local-evento" name="local-evento" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border focus:border-indigo-500 focus:ring-indigo-500 outline-none" placeholder="Local do evento">
                    </div>
                </div>

                <div>
                    <label for="descricao-evento" class="block text-sm font-medium text-gray-700">Descrição do Evento</label>
                    <textarea id="descricao-evento" name="descricao-evento" rows="4" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border focus:border-indigo-500 focus:ring-indigo-500 outline-none" placeholder="Descrição do evento"></textarea>
                </div>

                <div>
                    <button type="submit" 
                        class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm 
                        text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 
                        focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Cadastrar Evento
                    </button>
                </div>
            </form>
        </div>

    </main>

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

        function previewBanner(event) {
            const bannerPreview = document.getElementById('bannerPreview');
            const bannerImg = document.getElementById('bannerPreviewImg');
            
            if (event.target.files && event.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    bannerImg.src = e.target.result;
                    bannerPreview.classList.remove('hidden');
                }
                reader.readAsDataURL(event.target.files[0]);
            } else {
                bannerPreview.classList.add('hidden');
            }
        }
        
        function previewCard(event) {
            const cardPreview = document.getElementById('cardPreview');
            const cardImg = document.getElementById('cardPreviewImg');
            
            if (event.target.files && event.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    cardImg.src = e.target.result;
                    cardPreview.classList.remove('hidden');
                }
                reader.readAsDataURL(event.target.files[0]);
            } else {
                cardPreview.classList.add('hidden');
            }
        }
    </script>
</body>

</html>