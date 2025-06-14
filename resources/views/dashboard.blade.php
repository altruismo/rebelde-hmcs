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

                    <div class="bg-heaven text-dim dark:bg-dark-clear dark:text-gray-200 p-4 rounded shadow shadow-clear">
                        <h2 class="text-lg text-secondary font-bold mb-2"> <a class="underline" href="#">{{ __('dashboard.active_services') }} (6) </a></h2>
                        <p class="text-dim">2 {{ __('dashboard.shared_services') }}</p>
                        <p class="text-dim">1 {{ __('dashboard.vps_services') }}</p>
                        <p class="text-dim">1 {{ __('dashboard.vps_auto_services') }}</p>
                        <p class="text-dim">1 {{ __('dashboard.vm_services') }}</p>
                        <p class="text-dim">3 {{ __('dashboard.web_design_services') }}</p>
                        <br>
                        <a class="underline text-secondary dark:text-dark-heaven" href="#"> {{ __('dashboard.view_more') }}</a>
                    </div>

                    <div class="bg-heaven text-dim dark:bg-dark-clear dark:text-gray-200 p-4 rounded shadow shadow-clear">
                        <h2 class="text-lg text-secondary font-bold mb-2"> <a class="underline" href="#">{{ __('dashboard.domain_services') }} (10) </a></h2>
                        <p class="text-dim"> dominio1.cl {{ __('dashboard.domain_pending') }} - 06/05/2025</p>
                        <p class="text-dim"> dominio2.cl {{ __('dashboard.domain_active') }} - 12/05/2030</p>
                        <p class="text-dim"> dominio3.com {{ __('dashboard.domain_suspended') }} - 26/04/2025</p>
                        <p class="text-dim"> dominio4.net {{ __('dashboard.domain_outdate') }} - 31/04/2025</p>
                        <p class="text-dim"> dominio5.org {{ __('dashboard.domain_erased') }} - 26/08/2011</p>
                        <p class="text-dim"> dominio6.org {{ __('dashboard.domain_erased') }} - 06/12/2010</p>
                        <a class="underline text-secondary dark:text-dark-heaven" href="#"> {{ __('dashboard.view_more') }}</a>
                    </div>

                    <div class="bg-heaven text-dim dark:bg-dark-clear dark:text-gray-200 p-4 rounded shadow shadow-clear">
                        <h2 class="text-lg text-secondary font-bold mb-2"> <a class="underline" href="#">{{ __('dashboard.open_tickets') }} </a></h2>
                        <p class="text-green-800">000 {{ __('dashboard.opened_tickets') }}</p>
                        <p class="text-green-600">001 {{ __('dashboard.answered_tickets') }}</p>
                        <p class="text-green-700">001 {{ __('dashboard.in_progress_tickets') }}</p>
                        <p class="text-green-500">001 {{ __('dashboard.waiting_tickets') }}</p>
                        <p class="text-green-400">000 {{ __('dashboard.hold_tickets') }}</p>
                        <p class="text-green-300">100 {{ __('dashboard.closed_tickets') }}</p>
                        <a class="underline text-secondary dark:text-dark-heaven" href="#"> {{ __('dashboard.view_more') }}</a>
                    </div>

                    <div class="bg-heaven text-dim dark:bg-dark-clear dark:text-gray-200 p-4 rounded shadow shadow-clear">
                        <h2 class="text-lg text-secondary font-bold mb-2"> <a class="underline" href="#">{{ __('dashboard.last_payments') }} </a></h2>
                        <p class="text-green-800">$19.990 {{ __('dashboard.last_payment_done') }} 01/06/2025 13:51:04</p>
                        <p class="text-green-600">$ 2.990 {{ __('dashboard.last_payment_done') }} 15/05/2025 21:30:15</p>
                        <p class="text-green-500">$17.900 {{ __('dashboard.last_payment_done') }} 07/04/2025 14:10:45</p>
                        <p class="text-green-400">$19.990 {{ __('dashboard.last_payment_done') }} 01/04/2025 10:21:03</p>
                        <p class="text-green-300">$ 2.990 {{ __('dashboard.last_payment_done') }} 12/03/2025 01:30:10</p>
                        <p class="text-green-200">$ 7.990 {{ __('dashboard.last_payment_done') }} 10/03/2025 12:03:08</p>
                        <a class="underline text-secondary dark:text-dark-heaven" href="#"> {{ __('dashboard.view_more') }}</a>
                    </div>

                </div>
                <br>
                <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                    <div class="relative w-full max-w focus-within:text-green-500">
                        <div class="absolute inset-y-0 flex items-center pl-2 text-dim">
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input class="w-full h-19 pl-8 pr-2 text-lg text-secondary placeholder-dim bg-milk border-1 border-shade rounded-md
                        dark:placeholder-orange-200 dark:focus:shadow-outline-green dark:focus:placeholder-green-400 dark:bg-dark_heaven dark:text-green-700 
                        focus:placeholder-clear focus:bg-white focus:border-dim focus:outline-none focus:shadow-outline-red form-input"
                            type="text" placeholder="Buscar en la base de conocimiento..." aria-label="Search">
                    </div>
                </div>
                <br>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                    <div class="bg-heaven dark:bg-dark-dim p-4 rounded shadow">
                        <div class="bg-heaven text-dim dark:bg-dark-clear dark:text-gray-200 p-4 rounded shadow">
                            <h2 class="text-lg font-bold mb-2"> Productos/Servicios Activos </h2>
                        </div>
                        <br>
                        <div class="bg-heaven text-dim dark:bg-dark-clear dark:text-gray-200 p-4 rounded shadow">
                            <h2 class="text-lg font-bold mb-2"> Registrar Nuevo Dominio </h2>
                        </div>
                    </div>
                    <div class="bg-heaven dark:bg-dark-dim p-4 rounded shadow">
                        <div class="bg-heaven text-dim dark:bg-dark-clear dark:text-gray-200 p-4 rounded shadow">
                            <h2 class="text-lg font-bold mb-2"> Tickets de Soporte Recientes </h2>
                        </div>
                        <br>
                        <div class="bg-heaven text-dim dark:bg-dark-clear dark:text-gray-200 p-4 rounded shadow">
                            <h2 class="text-lg font-bold mb-2"> Últimas Noticias </h2>
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