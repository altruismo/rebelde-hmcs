<!-- Profile Dropdown Menu -->
<div id="dropdown" class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow 
            dark:bg-dark-dim dark:text-dark-brown dark:border dark:border-dark-deep dark:divide-dark-deep rounded-xl">
    <div class="py-3 px-4">
        <span class="block text-sm font-semibold"> {{ Auth::user()->name }} </span>
        <span class="block text-sm truncate"> {{ Auth::user()->email }} </span>
    </div>
    <ul class="py-1" aria-labelledby="dropdown">
        <li>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-dark-brown dark:hover:text-dark-dim">
                Edit Account Details
            </a>
        </li>
        <li>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-dark-brown dark:hover:text-dark-dim">
                Contacts/Sub-Accounts
            </a>
        </li>
    </ul>
    <ul class="py-1" aria-labelledby="dropdown">
        <li>
            <a href="#" class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-dark-brown dark:hover:text-dark-dim">
                <svg class="mr-2 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17 6h-2V5h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2h-.541A5.965 5.965 0 0 1 14 10v4a1 1 0 1 1-2 0v-4c0-2.206-1.794-4-4-4-.075 0-.148.012-.22.028C7.686 6.022 7.596 6 7.5 6A4.505 4.505 0 0 0 3 10.5V16a1 1 0 0 0 1 1h7v3a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-3h5a1 1 0 0 0 1-1v-6c0-2.206-1.794-4-4-4Zm-9 8.5H7a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2Z" />
                </svg>
                Email History
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-dark-brown dark:hover:text-dark-dim">
                <svg class="mr-2 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
                </svg>
                Change Password</a>
        </li>
    </ul>
    <ul class="py-1" aria-labelledby="dropdown">
        <li>
            <a href="#" class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-dark-brown dark:hover:text-dark-dim">
                <svg class="mr-2 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                </svg>
                Log out
            </a>
        </li>
    </ul>
</div>