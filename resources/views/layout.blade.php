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

    @yield('header')

    <!-- Banner -->
    @yield('banner')

    <!-- Eventos -->
    <main class="max-w-7xl mx-auto px-4 pt-1 md:pt-10">
        
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
