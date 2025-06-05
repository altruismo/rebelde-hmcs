<x-app-layout>

    <div class="min-h-screen flex">

        {{-- Sidebar --}}
        <aside class="w-64 bg-white border-r shadow-sm flex flex-col">
            <nav class="flex-1 px-4 py-6">
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-6">

                    <div class="bg-white p-4 rounded shadow">
                        <div class="px-6 flex items-center border-b font-bold text-lg text-teal-700">
                            {{ __('Your Info') }}
                        </div>                     
                        <h2 class="text-lg font-bold mb-2">{{ __('Your Company') }}<br>
                            {{ Auth::user()->name }}
                        </h2>
                        <p>La Quebrada 9651<br>
                            105b<br>
                            LAS CONDES<br>
                            metropolitana<br>
                            7600838<br>
                            Chile<br>
                        </p>
                        <a href="/profile" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('Update') }}</a>
                    </div>

                    <div class="bg-white p-4 rounded shadow">
                        <div class="px-6 flex items-center border-b font-bold text-lg text-teal-700">
                            {{ __('Contacts') }}
                        </div>

                        <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">                            
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 me-2 text-gray-500 dark:text-gray-400 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                {{ __('No Contacts Found') }}
                            </li>
                        </ul>

                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('New Contact') }}</a>
                    </div>

                    <div class="bg-white p-4 rounded shadow">
                        <div class="px-6 flex items-center border-b font-bold text-lg text-teal-700">
                            {{ __('Shortcuts') }}
                        </div>
                        <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400"> 
                            <li class="flex items-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('Order New Service') }}</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('Register a Domain') }}</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('View Invoices') }}</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('View Tickets') }}</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('Open Ticket') }}</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('Logout') }}</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </aside>

        {{-- Área principal --}}
        <div class="flex-1 flex flex-col">
            {{-- Encabezado --}}
            <header class="bg-white shadow px-6 py-4">
                <h1 class="text-2xl font-semibold text-gray-800">Dashboard del Cliente</h1>
            </header>

            {{-- Contenido --}}
            <main class="flex-1 p-6">
                <p class="text-gray-700 mb-4">Bienvenido, {{ Auth::user()->name }}.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="text-lg font-bold mb-2">Servicios Activos</h2>
                        <p>2 servicios VPS en curso</p>
                    </div>

                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="text-lg font-bold mb-2">Último Pago</h2>
                        <p>Realizado el 01/06/2025</p>
                    </div>

                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="text-lg font-bold mb-2">Tickets Abiertos</h2>
                        <p>1 ticket en espera de respuesta</p>
                    </div>
                </div>
            </main>
        </div>
    </div>

</x-app-layout>