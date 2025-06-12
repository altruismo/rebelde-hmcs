<x-app-layout>

    <div class="min-h-screen flex">

        {{-- Sidebar --}}
        <aside class="hidden lg:block w-64 bg-white dark:bg-dark_light shadow flex flex-col">
            <nav class="flex-1 px-4 py-6">
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-6">

                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-white" />
                        </a>
                        <h2 class="pl-2 text-xl dark:text-white">Rebelde HMCS</h2>
                    </div>

                    <div class="bg-white dark:bg-dark dark:text-gray-200 p-4 rounded shadow">
                        <div class="px-6 flex items-center border-b font-bold text-lg text-teal-700">
                            {{ __('dashboard.your_info') }}
                        </div>
                        <h2 class="text-lg font-bold mb-2">{{ __('dashboard.company_placeholder') }}<br>
                            {{ Auth::user()->name }}
                        </h2>
                        <p>La Quebrada 9651<br>
                            105b<br>
                            LAS CONDES<br>
                            metropolitana<br>
                            7600838<br>
                            Chile<br>
                        </p>
                        <a href="/profile" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('dashboard.update') }}</a>
                    </div>

                    <div class="bg-white dark:bg-dark dark:text-gray-200 p-4 rounded shadow">
                        <div class="px-6 flex items-center border-b font-bold text-lg text-teal-700">
                            {{ __('dashboard.contacts') }}
                        </div>

                        <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 me-2 text-gray-500 dark:text-gray-400 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                {{ __('dashboard.no_contacts_found') }}
                            </li>
                        </ul>

                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('dashboard.new_contact') }}</a>
                    </div>

                    <div class="bg-white dark:bg-dark dark:text-gray-200 p-4 rounded shadow">
                        <div class="px-6 flex items-center border-b font-bold text-lg text-teal-700">
                            {{ __('dashboard.shortcuts') }}
                        </div>
                        <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                            <li class="flex items-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('dashboard.order_new_service') }}</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('dashboard.register_a_domain') }}</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('dashboard.view_invoices') }}</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('dashboard.view_tickets') }}</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('dashboard.open_ticket') }}</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('dashboard.logout') }}</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </aside>

        {{-- Área principal --}}
        <div class="flex-1 flex flex-col">
            {{-- Encabezado --}}
            @include('layouts.navigation')
            {{-- Contenido --}}
            <main class="flex-1 lg:px-20 px-6 py-6 dark:bg-dark_clear">

                <h1 class="text-2xl dark:text-white mb-2 font-semibold">{{ __('dashboard.welcome') }} {{ Auth::user()->name }}</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                    <div class="bg-white dark:bg-dark dark:text-gray-200 p-4 rounded shadow">
                        <h2 class="text-lg font-bold mb-2"> <a href="#">{{ __('dashboard.active_services') }} (6) </a></h2>
                        <p class="text-green-800">2 {{ __('dashboard.shared_services') }}</p>
                        <p class="text-green-600">1 {{ __('dashboard.vps_services') }}</p>
                        <p class="text-green-600">1 {{ __('dashboard.vps_auto_services') }}</p>
                        <p class="text-green-600">1 {{ __('dashboard.vm_services') }}</p>
                        <p class="text-green-500">3 {{ __('dashboard.web_design_services') }}</p>
                        <br>
                        <a class="font-bold" href="#"> {{ __('dashboard.view_more') }}</a>
                    </div>

                    <div class="bg-white dark:bg-dark dark:text-gray-200 p-4 rounded shadow">
                        <h2 class="text-lg font-bold mb-2"> <a href="#">{{ __('dashboard.domain_services') }} (10) </a></h2>
                        <p class="text-gray-400"> dominio1.cl {{ __('dashboard.domain_pending') }} - 06/05/2025</p>
                        <p class="text-green-600"> dominio2.cl {{ __('dashboard.domain_active') }} - 12/05/2030</p>
                        <p class="text-yellow-600"> dominio3.com {{ __('dashboard.domain_suspended') }} - 26/04/2025</p>
                        <p class="text-red-600"> dominio4.net {{ __('dashboard.domain_outdate') }} - 31/04/2025</p>
                        <p class="text-red-400"> dominio5.org {{ __('dashboard.domain_erased') }} - 26/08/2011</p>
                        <p class="text-red-400"> dominio6.org {{ __('dashboard.domain_erased') }} - 06/12/2010</p>
                        <a class="font-bold" href="#"> {{ __('dashboard.view_more') }}</a>
                    </div>

                    <div class="bg-white dark:bg-dark dark:text-gray-200 p-4 rounded shadow">
                        <h2 class="text-lg font-bold mb-2"> <a href="#">{{ __('dashboard.open_tickets') }} </a></h2>
                        <p class="text-green-800">000 {{ __('dashboard.opened_tickets') }}</p>
                        <p class="text-green-600">001 {{ __('dashboard.answered_tickets') }}</p>
                        <p class="text-green-700">001 {{ __('dashboard.in_progress_tickets') }}</p>
                        <p class="text-green-500">001 {{ __('dashboard.waiting_tickets') }}</p>
                        <p class="text-green-400">000 {{ __('dashboard.hold_tickets') }}</p>
                        <p class="text-green-300">100 {{ __('dashboard.closed_tickets') }}</p>
                        <a class="font-bold" href="#"> {{ __('dashboard.view_more') }}</a>
                    </div>

                    <div class="bg-white dark:bg-dark dark:text-gray-200 p-4 rounded shadow">
                        <h2 class="text-lg font-bold mb-2"> <a href="#">{{ __('dashboard.last_payments') }} </a></h2>
                        <p class="text-green-800">$19.990 {{ __('dashboard.last_payment_done') }} 01/06/2025 13:51:04</p>
                        <p class="text-green-600">$ 2.990 {{ __('dashboard.last_payment_done') }} 15/05/2025 21:30:15</p>
                        <p class="text-green-500">$17.900 {{ __('dashboard.last_payment_done') }} 07/04/2025 14:10:45</p>
                        <p class="text-green-400">$19.990 {{ __('dashboard.last_payment_done') }} 01/04/2025 10:21:03</p>
                        <p class="text-green-300">$ 2.990 {{ __('dashboard.last_payment_done') }} 12/03/2025 01:30:10</p>
                        <p class="text-green-200">$ 7.990 {{ __('dashboard.last_payment_done') }} 10/03/2025 12:03:08</p>
                        <a class="font-bold" href="#"> {{ __('dashboard.view_more') }}</a>
                    </div>

                </div>
                <br>
                <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                    <div class="relative w-full max-w focus-within:text-green-500">
                        <div class="absolute inset-y-0 flex items-center pl-2">
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input class="w-full h-19 pl-8 pr-2 text-lg text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md
                        dark:placeholder-green-300 dark:focus:shadow-outline-green dark:focus:placeholder-green-600 dark:bg-green-100 dark:text-green-100 
                        focus:placeholder-green-500 focus:bg-white focus:border-green-300 focus:outline-none focus:shadow-outline-purple form-input" 
                        type="text" placeholder="Buscar en la base de conocimiento..." aria-label="Search">
                    </div>
                </div>
                <br>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                    <div class="bg-white dark:bg-dark_clear p-4 rounded shadow">
                        <div class="bg-white dark:bg-dark dark:text-gray-200 p-4 rounded shadow"> Productos/Servicios Activos </div>
                        <br>
                        <div class="bg-white dark:bg-dark dark:text-gray-200 p-4 rounded shadow"> Registrar Nuevo Dominio </div>
                    </div>
                    <div class="bg-white dark:bg-dark_clear p-4 rounded shadow">
                        <div class="bg-white dark:bg-dark dark:text-gray-200 p-4 rounded shadow"> Tickets de Soporte Recientes </div>
                        <br>
                        <div class="bg-white dark:bg-dark dark:text-gray-200 p-4 rounded shadow"> Últimas Noticias </div>
                    </div>
                </div>
            </main>
        </div>

    </div>


    <footer class="bg-white dark:bg-dark dark:text-gray-200 dark:bg-zinc-900 text-gray-900 dark:text-gray-100 rounded-lg shadow-sm m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://www.focused.cl/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="https://focused.cl/images/focused-logo-b.png" class="h-8" alt="Focused Logo" />
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-white sm:mb-0">
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
            <hr class="my-6 border-white sm:mx-auto lg:my-8" />
            <span class="block text-sm text-white sm:text-center">© 2023 <a href="https://focused.cl/" class="hover:underline">Focused</a>. All Rights Reserved.</span>
        </div>
    </footer>



</x-app-layout>