<aside class="hidden lg:block w-64 text-dim bg-heaven dark:bg-dark-dim flex flex-col">
    <nav class="flex-1 px-4 py-6">
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-6">

            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-9 w-auto fill-current"/>
                </a>
                <h2 class="pl-2 text-xl">Rebelde HMCS</h2>
            </div>

            <div class="bg-heaven dark:bg-dark-dim p-4 rounded shadow shadow-clear">
                <div class="px-6 flex items-center border-b border-shade font-bold text-lg text-dim">
                    {{ __('dashboard.your_info') }}
                </div>
                <h2 class="text-lg font-bold mb-2">{{ __('dashboard.company_placeholder') }}<br>
                    {{ Auth::user()->name }}
                </h2>
                <p class="text-dim">La Quebrada 9651<br>
                    105b<br>
                    LAS CONDES<br>
                    metropolitana<br>
                    7600838<br>
                    Chile<br>
                </p>
                <a href="/profile" class="font-medium text-secondary dark:text-blue-500 hover:underline">{{ __('dashboard.update') }}</a>
            </div>

            <div class="bg-heaven dark:bg-dark-dim dark:text-gray-200 p-4 rounded shadow shadow-clear">
                <div class="px-6 flex items-center border-b border-shade font-bold text-lg text-heaven">
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

                <a href="#" class="font-medium text-secondary dark:text-blue-500 hover:underline">{{ __('dashboard.new_contact') }}</a>
            </div>

            <div class="bg-heaven dark:bg-dark-dim dark:text-gray-200 p-4 rounded shadow shadow-clear">
                <div class="px-6 flex items-center border-b border-shade font-bold text-lg text-heaven">
                    {{ __('dashboard.shortcuts') }}
                </div>
                <ul class="max-w-md space-y-1 text-heaven list-inside dark:text-gray-400">
                    <li class="flex items-center">
                        <a href="#" class="font-medium text-secondary dark:text-blue-500 hover:underline">{{ __('dashboard.order_new_service') }}</a>
                    </li>
                    <li class="flex items-center">
                        <a href="#" class="font-medium text-secondary dark:text-blue-500 hover:underline">{{ __('dashboard.register_a_domain') }}</a>
                    </li>
                    <li class="flex items-center">
                        <a href="#" class="font-medium text-secondary dark:text-blue-500 hover:underline">{{ __('dashboard.view_invoices') }}</a>
                    </li>
                    <li class="flex items-center">
                        <a href="#" class="font-medium text-secondary dark:text-blue-500 hover:underline">{{ __('dashboard.view_tickets') }}</a>
                    </li>
                    <li class="flex items-center">
                        <a href="#" class="font-medium text-secondary dark:text-blue-500 hover:underline">{{ __('dashboard.open_ticket') }}</a>
                    </li>
                    <li class="flex items-center">
                        <a href="#" class="font-medium text-secondary dark:text-blue-500 hover:underline">{{ __('dashboard.logout') }}</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</aside>