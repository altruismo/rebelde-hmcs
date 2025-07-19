<x-app-layout>
  <div class="antialiased">
    
    {{-- Encabezado --}}
    @include('layouts.navigation')

    {{-- Sidebar --}}
    <x-aside-client />

    {{-- Main --}}
    <x-main-client />

  </div>
</x-app-layout>