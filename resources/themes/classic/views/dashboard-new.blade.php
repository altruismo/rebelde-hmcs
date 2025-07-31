<x-theme::app-layout>
  <div class="antialiased">
    
    {{-- Encabezado --}}
    @include('theme::layouts.navigation')

    {{-- Sidebar --}}
    <x-theme::aside-client />

    {{-- Main --}}
    <x-theme::main-client />

  </div>
</x-theme::app-layout>