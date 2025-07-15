<main class="p-4 pt-20 md:ml-64 h-auto">
  <!-- Quick Access -->
  <x-client-user.quick-access />
  <!-- Search bar -->
  <x-client-user.search-bar />
  <!-- Carousel banner -->
  <x-client-user.carousel-banner />

  <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 mb-4">
    <x-client-user.active-services />
    <x-client-user.recent-invoices />
    <!-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-dark-brown h-48 md:h-72"></div> -->
  </div>
  <!-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-dark-brown h-96 mb-4"> -->
    <x-client-user.last-tickets />
  <!-- </div> -->
  <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 mb-4">
    <x-client-user.new-order />
    <x-client-user.new-domain-order />
    <x-client-user.announcements />
    <!-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-dark-brown h-48 md:h-72"></div> -->
    <!-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-dark-brown h-48 md:h-72"></div> -->
    <!-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-dark-brown h-48 md:h-72"></div> -->
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-dark-brown h-48 md:h-72"></div>
  </div>
</main>