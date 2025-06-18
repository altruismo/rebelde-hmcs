<x-app-layout>

    <div class="min-h-screen flex">

        {{-- Sidebar --}}
        <x-aside-client />

        {{-- Área principal --}}
        <div class="flex-1 flex flex-col">
            {{-- Encabezado --}}
            @include('layouts.navigation')
            {{-- Contenido --}}
            <main class="flex-1 lg:px-48 px-6 py-6 bg-heaven dark:bg-dark-shade">

                <h1 class="text-2xl text-dim dark:text-white mb-2 font-semibold">{{ __('dashboard.welcome') }} {{ Auth::user()->name }}</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                    <div class="card">
                        <h2 class="text-lg text-secondary font-bold mb-2">
                            <a href="#">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1M5 12h14M5 12a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1m-2 3h.01M14 15h.01M17 9h.01M14 9h.01"/>
                                </svg>
                                {{ __('dashboard.active_services') }} (6)
                            </a>
                        </h2>
                        <p class="text-dim">2 {{ __('dashboard.shared_services') }}</p>
                        <p class="text-dim">1 {{ __('dashboard.vps_services') }}</p>
                        <p class="text-dim">1 {{ __('dashboard.vps_auto_services') }}</p>
                        <p class="text-dim">1 {{ __('dashboard.vm_services') }}</p>
                        <p class="text-dm">3 {{ __('dashboard.web_design_services') }}</p>
                        <br> 
                        <a href="#">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16.881V7.119a1 1 0 0 1 1.636-.772l5.927 4.881a1 1 0 0 1 0 1.544l-5.927 4.88A1 1 0 0 1 8 16.882Z"/>
                            </svg>
                            {{ __('dashboard.view_more') }}
                        </a>
                    </div>

                    <div class="card">
                        <h2 class="text-lg text-secondary font-bold mb-2">
                            <a href="#">
                                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                                    <path stroke="currentColor" stroke-width="2" d="M2 12a10 10 0 1 0 20 0 10 10 0 1 0 -20 0"></path>
                                    <path d="M6 4.71053c0.78024 0.71052 2.38755 2.65263 2.57481 4.73684C8.74984 11.3955 10.0357 12.9786 12 13c0.7549 0.0082 1.5183 -0.5371 1.5164 -1.292 -0.0006 -0.2335 -0.0391 -0.4722 -0.0994 -0.6917 -0.0839 -0.3055 -0.0913 -0.6568 0.083 -1.0163 0.6099 -1.25746 1.8094 -1.59523 2.7599 -2.27814 0.4215 -0.30288 0.806 -0.62239 0.9756 -0.87975 0.4682 -0.71053 0.9363 -2.13158 0.7022 -2.84211" stroke="currentColor" stroke-width="2"></path>
                                <path d="M22 13c-0.3294 0.931 -0.5625 3.375 -4.2818 3.4138 0 0 -3.2936 0 -4.2817 1.8621 -0.7905 1.4896 -0.3294 3.1034 0 3.7241" stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                {{ __('dashboard.domain_services') }} (10)
                            </a>
                        </h2>
                        <p class="text-dim"> dominio1.cl - 06/05/2025</p>
                        <p class="text-dim"> dominio2.cl - 12/05/2030</p>
                        <p class="text-dim"> dominio3.com - 26/04/2025</p>
                        <p class="text-dim"> dominio4.net - 31/04/2025</p>
                        <p class="text-dim"> dominio3.com - 02/04/2025</p>
                        <a href="#">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16.881V7.119a1 1 0 0 1 1.636-.772l5.927 4.881a1 1 0 0 1 0 1.544l-5.927 4.88A1 1 0 0 1 8 16.882Z"/>
                            </svg>
                            {{ __('dashboard.view_more') }}
                        </a>
                    </div>

                    <div class="card">
                        <h2 class="text-lg text-secondary font-bold mb-2">
                            <a href="#">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17h6l3 3v-3h2V9h-2M4 4h11v8H9l-3 3v-3H4V4Z"/>
                                </svg>
                                {{ __('dashboard.open_tickets') }}
                            </a>
                        </h2>
                        <p class="text-green-800">000 {{ __('dashboard.opened_tickets') }}</p>
                        <p class="text-green-600">001 {{ __('dashboard.answered_tickets') }}</p>
                        <p class="text-green-700">001 {{ __('dashboard.in_progress_tickets') }}</p>
                        <p class="text-green-500">001 {{ __('dashboard.waiting_tickets') }}</p>
                        <p class="text-green-400">000 {{ __('dashboard.hold_tickets') }}</p>
                        <p class="text-green-300">100 {{ __('dashboard.closed_tickets') }}</p>
                        <a class="underline text-deep dark:text-dark-heaven" href="#"> {{ __('dashboard.view_more') }}</a>
                    </div>

                    <div class="card">
                        <h2 class="text-lg text-secondary font-bold mb-2">
                            <a href="#">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                </svg>
                                {{ __('dashboard.last_payments') }}
                            </a>
                        </h2>
                        <p class="text-green-800">$19.990 - 01/06/2025 13:51:04</p>
                        <p class="text-green-600">$ 2.990 - 15/05/2025 21:30:15</p>
                        <p class="text-green-500">$17.900 - 07/04/2025 14:10:45</p>
                        <a class="underline text-deep dark:text-dark-heaven" href="#"> {{ __('dashboard.view_more') }}</a>
                    </div>

                </div>                    
                <br>
                <div class="flex items-center w-full mx-auto">   
                    <label for="voice-search" class="sr-only">{{ __('dashboard.search') }}</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="opacity-50 text-dim" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.529 9.988a2.502 2.502 0 1 1 5 .191A2.441 2.441 0 0 1 12 12.582V14m-.01 3.008H12M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </div>
                        <input type="text" id="voice-search" class="bg-milk border border-dim text-secondary text-sm rounded-lg focus:ring-primary focus:border-clear block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{ __('dashboard.searchbar_placeholder') }}" required />
                        <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3 hidden">
                            <svg class="w-4 h-4 text-dim dark:text-gray-400 hover:text-primary dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7v3a5.006 5.006 0 0 1-5 5H6a5.006 5.006 0 0 1-5-5V7m7 9v3m-3 0h6M7 1h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3Z"/>
                            </svg>
                        </button>
                    </div>
                    <button type="submit" class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-secondary rounded-lg border border-secondary hover:bg-deep focus:ring-1 focus:outline-none focus:ring-primary dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>{{ __('dashboard.search') }}
                    </button>
                </div>
                <div class="flex ml-4 mt-2 mb-0">
                    <div class="flex items-center me-4">
                        <input checked id="inline-radio" type="radio" value="" name="inline-radio-group">
                        <label for="inline-radio">Base de Conocimientos</label>
                    </div>
                    <div class="flex items-center me-4">
                        <input id="inline-2-radio" type="radio" value="" name="inline-radio-group">
                        <label for="inline-2-radio">Google</label>
                    </div>
                    <div class="flex items-center me-4">
                        <input id="inline-3-radio" type="radio" value="" name="inline-radio-group">
                        <label for="inline-3-radio">StackOverflow</label>
                    </div>
                    <div class="flex items-center opacity-30">
                        <input disabled id="inline-4-radio" type="radio" value="" name="inline-radio-group">
                        <label for="inline-4-radio">ChatGPT</label>
                    </div>
                </div>
                <br>
                <div class="deck-2 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                    <div class="bg-heaven dark:bg-dark-dim py-4">
                        <div class="card">
                            <h2 class="text-lg font-bold mb-2">
                                <a href="#">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M11.5039 3.13176c.3074-.17568.6848-.17568.9923 0l3.5554 2.0317L12 7.42604 7.94841 5.16346l3.55549-2.0317Zm-4.50388 3.7928L7 10.2768l-3.15822 1.8047 4.14118 2.205L11 12.5625V9.15832L7.00002 6.92456ZM3 13.8991v3.8152c0 .3588.19229.6902.50386.8682l3.49615 1.9978V16.029L3 13.8991Zm6.00001 6.6812L12 18.866l3 1.7143v-4.5714l-3-1.7143-2.99999 1.7142v4.5715Zm7.99999 0 3.4961-1.9978c.3116-.178.5039-.5094.5039-.8682v-3.8152l-4 2.1299v4.5513Zm3.1582-8.4988L17 10.2768V6.92457l-4 2.23375v3.40418l3.0171 1.724 4.1411-2.205Z"/>
                                    </svg>
                                    Productos/Servicios Activos
                                </a>
                            </h2>
                        </div>
                        <br>
                        <div class="card">
                            <h2 class="text-lg font-bold mb-2">
                                <a href="#">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                                    </svg>
                                    Registrar Nuevo Dominio
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="bg-heaven dark:bg-dark-dim py-4">
                        <div class="card">
                            <h2 class="text-lg font-bold mb-2">
                                <a href="#">                                     
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M3.559 4.544c.355-.35.834-.544 1.33-.544H19.11c.496 0 .975.194 1.33.544.356.35.559.829.559 1.331v9.25c0 .502-.203.981-.559 1.331-.355.35-.834.544-1.33.544H15.5l-2.7 3.6a1 1 0 0 1-1.6 0L8.5 17H4.889c-.496 0-.975-.194-1.33-.544A1.868 1.868 0 0 1 3 15.125v-9.25c0-.502.203-.981.559-1.331ZM7.556 7.5a1 1 0 1 0 0 2h8a1 1 0 0 0 0-2h-8Zm0 3.5a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2H7.556Z" clip-rule="evenodd"/>
                                    </svg>
                                    Conversaciones Recientes
                                </a>
                            </h2>
                        </div>
                        <br>
                        <div class="card">
                            <h2 class="text-lg font-bold mb-2">
                                <a href="#">                                                                    
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M18.458 3.11A1 1 0 0 1 19 4v16a1 1 0 0 1-1.581.814L12 16.944V7.056l5.419-3.87a1 1 0 0 1 1.039-.076ZM22 12c0 1.48-.804 2.773-2 3.465v-6.93c1.196.692 2 1.984 2 3.465ZM10 8H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6V8Zm0 9H5v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3Z" clip-rule="evenodd"/>
                                    </svg>
                                    Últimas Noticias
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="bg-heaven dark:bg-dark dark:text-gray-200 dark:bg-dark-shade dark:text-gray-100">
                <div class="w-full lg:px-6 lg:pr-48 px-6 md:py-8">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <a href="https://www.focused.cl/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                            <img src="https://focused.cl/images/focused-logo-a.png" class="h-8" alt="Focused Logo" />
                        </a>
                        <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-dim dark:text-dark-heaven sm:mb-0">
                            <li>
                                <a href="#" class="hover:underline me-4 md:me-6">About</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-6 border-dim dark:border-dark-clear sm:mx-auto lg:my-8" />
                    <span class="block text-sm text-dim dark:text-dark-clear sm:text-center">© 2023 <a href="https://focused.cl/" class="hover:underline">Focused</a>. All Rights Reserved.</span>
                </div>
            </footer>
        </div>
    </div>    
</x-app-layout>