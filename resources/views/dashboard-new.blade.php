<x-app-layout>
  <div class="antialiased bg-gray-50 dark:bg-dark-deep">
    
    {{-- Encabezado --}}
    @include('layouts.navigation')

    {{-- Sidebar --}}
    <x-aside-client />

    {{-- Main --}}
    <x-main-client />

  </div>
</x-app-layout>