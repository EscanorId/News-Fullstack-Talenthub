<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Home Page</title>
    {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>

  <div class="min-h-full">
    <nav class="bg-gray-800" x-data="{ isOpen: false }">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <a href="/" ><img class="h-8 w-8" src="img/news-logo.png" alt="portal-berita-logo"></a>
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Hot News</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Tekno</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Otomotif</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Lifestyle</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Food</a>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
              </button>
  
              <!-- Profile dropdown -->
              <div class="relative ml-3">
                <div>
                  <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </button>
                </div>
  
                <!--
                  Dropdown menu, show/hide based on menu state.
  
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                <div x-show="isOpen"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                  <!-- Active: "bg-gray-100", Not Active: "" -->
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                  <a href="/signin" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Log In</a>
                </div>
              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!-- Menu open: "hidden", Menu closed: "block" -->
              <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!-- Menu open: "block", Menu closed: "hidden" -->
              <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
  
      <!-- Mobile menu, show/hide based on menu state. -->
      <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Hot News</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Tekno</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Otomotif</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Lifestyle</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Food</a>
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
          <div class="flex items-center px-5">
            <div class="flex-shrink-0">
              <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="ml-3">
              <div class="text-base font-medium leading-none text-white">Tom Cook</div>
              <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
            </div>
            <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>
          </div>
          {{-- <div class="mt-3 space-y-1 px-2">
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
          </div> --}}
        </div>
      </div>
    </nav>
  
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Portal Berita</h1>
      </div>
    </header>
  </div>

      <!-- Your content -->
      
  <main class="shadow">
    <div id="news-gallery" class="mx-auto px-4 py-6 sm:px-6 lg:px-8 shadow">
      <h1 class="text-5xl text-center block font-semibold text-gray-800">Sorotan</h1>
      <div class="grid grid-cols-5 my-10">
        <article class="mx-4">
          <img src="img/pura-ulun-danu-bratan-bali-hindu-temple-surrounded-by-flowers-bratan-lake.jpg">
          <a href="#" class="hover:text-sky-500">Revolusi Transportasi dengan Teknologi Baru</a>
        </article>
        <article class="mx-4">
          <img src="img/pura-ulun-danu-bratan-bali-hindu-temple-surrounded-by-flowers-bratan-lake.jpg">
          <a href="#" class="hover:text-sky-500">AI Meningkatkan Produktivitas Kerja</a>
        </article>
        <article class="mx-4">
          <img src="img/pura-ulun-danu-bratan-bali-hindu-temple-surrounded-by-flowers-bratan-lake.jpg">
          <a href="#" class="hover:text-sky-500">Inovasi Teknologi Ramah Lingkungan</a>
        </article>
        <article class="mx-4">
          <img src="img/pura-ulun-danu-bratan-bali-hindu-temple-surrounded-by-flowers-bratan-lake.jpg">
          <a href="#" class="hover:text-sky-500">Perangkat Pintar Dominasi Pasar</a>
        </article>
        <article class="mx-4">
          <img src="img/pura-ulun-danu-bratan-bali-hindu-temple-surrounded-by-flowers-bratan-lake.jpg">
          <a href="#" class="hover:text-sky-500">Kecerdasan Buatan dalam Kesehatan</a>
        </article>
      </div>
    </div>
    
    <div id="img-gallery" class="my-24">
      <div id="gallery" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-700 dark:bg-gray-800/30 group-hover:bg-gray-600 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-700 dark:bg-gray-800/30 group-hover:bg-gray-600 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
      </div>

    </div>
    <div id="latest-content" class="shadow my-24">
      <h1 class="text-3xl font-bold ms-8">Latest News</h1>
      <div id="card-latest-content" class="flex justify-center">
        <div id="card-latest-content" class="grid grid-cols-3 gap-12">
          <article class="max-w-72">
            <img src="img/pura-ulun-danu-bratan-bali-hindu-temple-surrounded-by-flowers-bratan-lake.jpg">
            <a href="#" class="hover:text-sky-500 my-7 font-bold text-xl">Kecerdasan Buatan dalam Kesehatan</a>
            <p class="my-4 text-slate-700 font-medium">This is a wider card with supporting text below as a natural leadin to additional content</p>
            <section class="flex">
              <p class="font-black text-rose-600"> | </p>
              <p class="text-slate-500 ms-2">Latest content</p>
            </section>
          </article>
          <article class="max-w-72">
            <img src="img/pura-ulun-danu-bratan-bali-hindu-temple-surrounded-by-flowers-bratan-lake.jpg">
            <a href="#" class="hover:text-sky-500 my-7 font-bold text-xl">Kecerdasan Buatan dalam Kesehatan</a>
            <p class="my-4 text-slate-700 font-medium">This is a wider card with supporting text below as a natural leadin to additional content</p>
            <section class="flex">
              <p class="font-black text-rose-600"> | </p>
              <p class="text-slate-500 ms-2">Latest content</p>
            </section>
          </article>
          <article class="max-w-72">
            <img src="img/pura-ulun-danu-bratan-bali-hindu-temple-surrounded-by-flowers-bratan-lake.jpg">
            <a href="#" class="hover:text-sky-500 my-7 font-bold text-xl">Kecerdasan Buatan dalam Kesehatan</a>
            <p class="my-4 text-slate-700 font-medium">This is a wider card with supporting text below as a natural leadin to additional content</p>
            <section class="flex">
              <p class="font-black text-rose-600"> | </p>
              <p class="text-slate-500 ms-2">Latest content</p>
            </section>
          </article>
          <article class="max-w-72">
            <img src="img/pura-ulun-danu-bratan-bali-hindu-temple-surrounded-by-flowers-bratan-lake.jpg">
            <a href="#" class="hover:text-sky-500 my-7 font-bold text-xl">Kecerdasan Buatan dalam Kesehatan</a>
            <p class="my-4 text-slate-700 font-medium">This is a wider card with supporting text below as a natural leadin to additional content</p>
            <section class="flex">
              <p class="font-black text-rose-600"> | </p>
              <p class="text-slate-500 ms-2">Latest content</p>
            </section>
          </article>
          <article class="max-w-72">
            <img src="img/pura-ulun-danu-bratan-bali-hindu-temple-surrounded-by-flowers-bratan-lake.jpg">
            <a href="#" class="hover:text-sky-500 my-7 font-bold text-xl">Kecerdasan Buatan dalam Kesehatan</a>
            <p class="my-4 text-slate-700 font-medium">This is a wider card with supporting text below as a natural leadin to additional content</p>
            <section class="flex">
              <p class="font-black text-rose-600"> | </p>
              <p class="text-slate-500 ms-2">Latest content</p>
            </section>
          </article>
          <article class="max-w-72">
            <img src="img/pura-ulun-danu-bratan-bali-hindu-temple-surrounded-by-flowers-bratan-lake.jpg">
            <a href="#" class="hover:text-sky-500 my-7 font-bold text-xl">Kecerdasan Buatan dalam Kesehatan</a>
            <p class="my-4 text-slate-700 font-medium">This is a wider card with supporting text below as a natural leadin to additional content</p>
            <section class="flex">
              <p class="font-black text-rose-600"> | </p>
              <p class="text-slate-500 ms-2">Latest content</p>
            </section>
          </article>
        </div>
        <div class="card-latest-advertise p-10 flex flex-col justify-center items-center" >
          <h1>ADVERTISEMENT</h1>
          <div class="w-80 h-5/6 bg-slate-950 text-white flex flex-col justify-center items-center">
            <p class="text-2xl">ADVERTISEMENT</p>
            <p class="mb-32 text-2xl">320X405</p>
            <button class="bg-white text-black py-3 px-7 cursor-pointer" >CONTACT US</button>
          </div>
        </div>
      </div>
      
    </div>
    <div id="most-popular" class="flex flex-col m-10 font-bold">
      <h1 class="py-6 text-3xl bg-slate-200 px-5">Most Popular</h1>
      <section class="flex py-4 text-3xl items-center">
        <p class="text-5xl text-slate-400 mx-5">1</p>
        <a href="">Why the world would end without political polls</a>
      </section>
      <section class="flex py-4 text-3xl items-center">
        <p class="text-5xl text-slate-400 mx-5">2</p>
        <a href="">Meet the man who designed the ducati monster</a>
      </section>
      <section class="flex py-4 text-3xl items-center">
        <p class="text-5xl text-slate-400 mx-5">3</p>
        <a href="">2020 Audi R8 Spyder spy shots release</a>
      </section>
      <section class="flex py-4 text-3xl items-center">
        <p class="text-5xl text-slate-400 mx-5">4</p>
        <a href="">Lamborghini makes Huracan GT3 racer faster for 2019</a>
      </section>
      <section class="flex py-4 text-3xl items-center">
        <p class="text-5xl text-slate-400 mx-5">5</p>
        <a href="">ZF plans $14 billion autonomous vehicle push, concept van</a>
      </section>
    </div>
  </main>


      <!-- Footer content -->
  

  <footer class="bg-gray-800 rounded-lg shadow m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">@sulhanas™</a> | Talenthub Kemnaker
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-300 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">About</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
    </div>
  </footer>

</body>
</html>