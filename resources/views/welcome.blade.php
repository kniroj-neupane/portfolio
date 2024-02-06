<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <!-- ====== Navbar Section Start -->
<header
   x-data="
   {
   navbarOpen: false
   }
   "
   class="flex items-center w-full bg-white dark:bg-dark"
   >
   <div class="container mx-auto">
      <div class="relative flex items-center justify-between -mx-4">
         <div class="max-w-full px-4 w-60">
            <a href="javascript:void(0)" class="block w-full py-5">
            <img
               src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-primary.svg"
               alt="logo"
               class="dark:hidden"
               />
            <img
               src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-white.svg"
               alt="logo"
               class="hidden dark:block"
               />
            </a>
         </div>
         <div class="flex items-center justify-between w-full px-4">
            <div>
               <button
                  @click="navbarOpen = !navbarOpen"
                  :class="navbarOpen && 'navbarTogglerActive' "
                  id="navbarToggler"
                  class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
                  >
               <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
                  ></span>
               <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
                  ></span>
               <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
                  ></span>
               </button>
               <nav
                  :class="!navbarOpen && 'hidden' "
                  id="navbarCollapse"
                  class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none dark:bg-dark-2 lg:dark:bg-transparent"
                  >
                  <ul class="block lg:flex">
                     <li>
                        <a
                           href="javascript:void(0)"
                           class="flex py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex dark:text-dark-6 dark:hover:text-white"
                           >
                        Home
                        </a>
                     </li>
                     <li>
                        <a
                           href="javascript:void(0)"
                           class="flex py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex dark:text-dark-6 dark:hover:text-white"
                           >
                        Payment
                        </a>
                     </li>
                     <li>
                        <a
                           href="javascript:void(0)"
                           class="flex py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex dark:text-dark-6 dark:hover:text-white"
                           >
                        Features
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
            <div class="justify-end hidden pr-16 sm:flex lg:pr-0">
               <a
                  href="javascript:void(0)"
                  class="py-3 text-base font-medium px-7 text-dark dark:text-white hover:text-primary"
                  >
               Login
               </a>
               <a
                  href="javascript:void(0)"
                  class="py-3 text-base font-medium text-white rounded-md bg-primary px-7 hover:bg-primary/90"
                  >
               Sign Up
               </a>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- ====== Navbar Section End -->
        @vite(['resources/js/app.js'])
        </body>
</html>
