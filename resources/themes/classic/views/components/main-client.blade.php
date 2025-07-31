<main class="p-0 pt-20 md:ml-64 h-auto">
  <!-- Quick Access -->
  <x-theme::client-user.quick-access />
  <!-- Search bar -->
  <x-theme::client-user.search-bar />
  <!-- Carousel banner -->
  <x-theme::client-user.carousel-banner />

  <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 mb-4 px-4">
    <x-theme::client-user.active-services />
    <x-theme::client-user.recent-invoices />
    <!-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-dark-brown h-48 md:h-72"></div> -->
  </div>
  <!-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-dark-brown h-96 mb-4"> -->
    <x-theme::client-user.last-tickets />
  <!-- </div> -->
  <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 mb-48 px-4">
    <x-theme::client-user.new-order />
    <x-theme::client-user.new-domain-order />
    <x-theme::client-user.announcements />
    <x-theme::client-user.notify-payment />
    <!-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-dark-brown h-48 md:h-72"></div> -->
    <!-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-dark-brown h-48 md:h-72"></div> -->
    <!-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-dark-brown h-48 md:h-72"></div> -->
    <!-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-dark-brown h-48 md:h-72"></div> -->
  </div>  
  <!-- Footer -->
  <x-theme::client-user.main-footer />
</main>
