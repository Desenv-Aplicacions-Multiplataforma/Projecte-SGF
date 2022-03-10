<x-guest-layout>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative pt-6 pb-16 sm:pb-24 bg-gradient-to-t from-cyan-400 to-purple-300">
        <div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
                    <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="#">
                                <span class="sr-only">Workflow</span>
                                <img class="h-8 w-auto sm:h-10 rounded-lg" src="https://cdnb.artstation.com/p/assets/images/images/010/483/605/large/brett-stebbins-glowing-green-potion-01-1920w.jpg?1524670180" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="hidden md:flex md:space-x-10">
                        <a href="#quefers" class="font-medium text-gray-500 hover:text-gray-900">Quefers</a>

                        <a href="#experiencia" class="font-medium text-gray-500 hover:text-gray-900">Experiència</a>

                        <a href="#pf" class="font-medium text-gray-500 hover:text-gray-900">Preguntes freqüents</a>

                        <a href="#team" class="font-medium text-gray-500 hover:text-gray-900">Equip</a>

                    </div>
                    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </nav>
            </div>
        </div>


        <div class="bg-gradient-to-t from-cyan-400 to-purple-300" id="quefers">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase">Urs Developers</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Quefers</p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">La millor aplicació per convertir activitats diàries en jocs.</p>
            </div>
        </div>
    </div>
    </div>
    <body class="bg-gradient-to-t from-purple-300 to-cyan-400">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img
                            class="object-cover w-full h-fit"
                            src="https://cdna.artstation.com/p/assets/images/images/029/272/446/large/philipp-a-urlich-cpncept220-sketch.jpg?1597017315"
                            alt="image"
                        />
                    </div>
                    <div class="swiper-slide">
                        <img
                            class="object-cover w-full h-4/6"
                            src="https://cdna.artstation.com/p/assets/images/images/029/272/442/large/philipp-a-urlich-cpncept220-greyscale.jpg?1597017311"
                            alt="image"
                        />
                    </div>
                    <div class="swiper-slide">
                        <img
                            class="object-cover w-full h-4/6"
                            src="https://cdna.artstation.com/p/assets/images/images/029/272/450/large/philipp-a-urlich-cpncept220.jpg?1597017424"
                            alt="image"
                        />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <!-- Swiper JS -->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script>
                var swiper = new Swiper('.mySwiper', {
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            </script>

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="pt-12 sm:pt-16 bg-gradient-to-t from-purple-300 to-cyan-400" id="experiencia">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-4xl mx-auto text-center">
                        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Desenvolupadors de més de 80 països han confiat en nosaltres</h2>
                        <p class="mt-3 text-xl text-gray-500 sm:mt-4">Som considerats una de les millors aplicacions de tasques</p>
                    </div>
                </div>
                <div class="mt-10 pb-12 sm:pb-16">
                    <div class="relative">
                        <div class="absolute inset-0 h-1/2"></div>
                        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="max-w-4xl mx-auto">
                                <dl class="rounded-lg bg-violet-200 shadow-lg sm:grid sm:grid-cols-3">
                                    <div class="flex flex-col border-b border-white p-6 text-center sm:border-0 sm:border-r">
                                        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">Llibertat de creació</dt>
                                        <dd class="order-1 text-5xl font-extrabold text-white">100%</dd>
                                    </div>
                                    <div class="flex flex-col border-t border-b border-white p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">Servei</dt>
                                        <dd class="order-1 text-5xl font-extrabold text-white">24/7</dd>
                                    </div>
                                    <div class="flex flex-col border-t border-white p-6 text-center sm:border-0 sm:border-l">
                                        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">Descàrregues</dt>
                                        <dd class="order-1 text-5xl font-extrabold text-white">1k</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="bg-gradient-to-t from-cyan-400 to-purple-300" id="pf">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
                    <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                        <div>
                            <h2 class="text-3xl font-extrabold text-gray-900 uppercase">Preguntes freqüents</h2>
                            <p class="mt-4 text-lg text-gray-500">No pots trobar resposta a les teves preguntes? Poseu-vos en contacte amb el nostre <a href="#team" class="font-medium text-indigo-600 hover:text-indigo-500">equip de suport</a></p>
                        </div>
                        <div class="mt-12 lg:mt-0 lg:col-span-2">
                            <dl class="space-y-12">
                                <div>
                                    <dt class="text-lg leading-6 font-medium text-gray-900">Per a què serveix aquesta aplicació?</dt>
                                    <dd class="mt-2 text-base text-gray-500">Quefers és una aplicació pensada per a convertir tasques senzilles però tedioses del dia a dia en jocs amb recompenses. D'aquesta forma els nens acceptaran millor les tasques.</dd>
                                </div>
                                <div>
                                    <dt class="text-lg leading-6 font-medium text-gray-900">És fàcil gestionar els premis, els punts i les tasques a fer dins de l'aplicació?</dt>
                                    <dd class="mt-2 text-base text-gray-500">Sí, el sistema és molt intuïtiu i visual.</dd>
                                </div>

                                <!-- More questions... -->
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-gradient-to-t from-purple-300 to-cyan-400" id="team">
                <div class="max-w-7xl mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 lg:py-24">
                    <div class="space-y-12">
                        <div class="space-y-5 sm:mx-auto sm:max-w-xl sm:space-y-4 lg:max-w-5xl">
                            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Coneix el nostre equip</h2>
                            <p class="text-xl text-gray-500">Aquí podeu trobar el nostre equip de treball i les seves xarxes socials</p>
                        </div>
                        <ul role="list" class="mx-auto space-y-16 sm:grid sm:grid-cols-2 sm:gap-16 sm:space-y-0 lg:grid-cols-3 lg:max-w-5xl">
                            <li>
                                <div class="space-y-6">
                                    <img class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56" src="https://www.elsoldehermosillo.com.mx/incoming/9a42x4-chloe-meme-nina/ALTERNATES/LANDSCAPE_1140/Chloe-meme-ni%C3%B1a" alt="">
                                    <div class="space-y-2">
                                        <div class="text-lg leading-6 font-medium space-y-1">
                                            <h3>Gabriel Ionut Urs</h3>
                                            <p class="text-indigo-600">"The rumanian guy"</p>
                                        </div>
                                        <ul role="list" class="flex justify-center space-x-5">
                                            <li>
                                                <a href="https://twitter.com/magnateUSA" class="text-gray-400 hover:text-gray-500">
                                                    <span class="sr-only">Twitter</span>
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                        <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="space-y-6">
                                    <img class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56" src="https://pbs.twimg.com/media/BOcZSXeCIAEZ_UY.jpg" alt="">
                                    <div class="space-y-2">
                                        <div class="text-lg leading-6 font-medium space-y-1">
                                            <h3>Sergi Casado Pellisa</h3>
                                            <p class="text-indigo-600">"CS:GO"</p>
                                        </div>
                                        <ul role="list" class="flex justify-center space-x-5">
                                            <li>
                                                <a href="https://twitter.com/BelenEstebanM" class="text-gray-400 hover:text-gray-500">
                                                    <span class="sr-only">Twitter</span>
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                        <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="space-y-6">
                                    <img class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56" src="https://media.sivasdescalzo.com/media/wysiwyg/Blog/11-2019/tyler-the-creator-svd-1.jpg" alt="">
                                    <div class="space-y-2">
                                        <div class="text-lg leading-6 font-medium space-y-1">
                                            <h3>Ferran Muñoz Zafra</h3>
                                            <p class="text-indigo-600">"UwU"</p>
                                        </div>
                                        <ul role="list" class="flex justify-center space-x-5">
                                            <li>
                                                <a href="https://twitter.com/elonmusk" class="text-gray-400 hover:text-gray-500">
                                                    <span class="sr-only">Twitter</span>
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                        <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- More people... -->
                        </ul>
                    </div>
                </div>
            </div>
            </body>
    <footer class="bg-gradient-to-t from-cyan-400 to-purple-300">
        <div class="mt-12 border-gray-200 pt-8">
            <p class="text-base text-gray-800 xl:text-center">&copy; 2022 URS DEVELOPERS, Inc. Tots els drets reservats.</p>
        </div>
    </footer>
</x-guest-layout>

