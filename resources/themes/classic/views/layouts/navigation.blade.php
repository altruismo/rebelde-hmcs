<nav class="ca-navigation-bar">
    <div class="flex flex-wrap justify-between items-center">
        <div class="flex justify-start items-center">
            <!-- Toggle Aside Navigation -->
            <button class="toggle-aside" aria-controls="drawer-navigation" data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation">
                <svg
                    aria-hidden="true"
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg
                    aria-hidden="true"
                    class="hidden w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Toggle sidebar</span>
            </button>
            <a href="https://flowbite.com" class="ca-main-logo">
                <img src="focused_hosting_main_logo_white_transparent_100x109.svg" alt="Flowbite Logo" />
                <span>Rebelde HMCS</span>
            </a>
        </div>
        <div class="flex items-center lg:order-2">
            <!-- Notifications -->
            <x-theme::client-user.notifications-dropdown />
            <!-- Apps -->
            <!-- <xclient-user.apps-dropdown /> -->
            <button
                type="button"
                id="user-menu-button"
                aria-expanded="false"
                data-dropdown-toggle="dropdown">
                <span class="sr-only">Open user menu</span>
                <img
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png"
                    alt="user photo" />
            </button>
            <x-client-user.profile-dropdown />
        </div>
    </div>
</nav>