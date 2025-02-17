<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-8" src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              
              <x-nav-link href="/" :active="request()->is('/')">Dashboard</x-nav-link>
              <x-nav-link href="/produk" :active="request()->is('/produk')">Produk</x-nav-link>
              <x-nav-link href="/seles" :active="request()->is('/seles')">Seles</x-nav-link>
              <x-nav-link href="/enkrip" :active="request()->is('/enkirp')">Enkripsi & Deksirpsi</x-nav-link>
              <x-nav-link href="/fibo" :active="request()->is('/fibo')">Fibonaci</x-nav-link>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
         
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        
        <x-dropdown-link href="/" :active="request()->is('/')">Dashboard</x-nav-link>
        <x-dropdown-link href="/produk" :active="request()->is('/produk')">Produk</x-dropdown-link>
        <x-dropdown-link href="/seles" :active="request()->is('/seles')">Seles</x-dropdown-link>
        <x-dropdown-link href="/enkrip" :active="request()->is('/enkirp')">Enkripsi & Deksirpsi</x-dropdown-link>
        <x-dropdown-link href="/fibo" :active="request()->is('/fibo')">Fibonaci</x-dropdown-link>
      </div>
     
    </div>
  </nav>