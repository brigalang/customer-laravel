<x-cart />

<body class="font-Poppins">
    <main class="">
        <header
            class="flex flex-row-reverse shadow-md mb-10 justify-between relative z-1 gap-2 p-5 md:items-center md:justify-center md:p-10 md:grid md:grid-cols-8 lg:p-10 ">
            <div class="p-1.5 rounded-xl border gap-x-2 flex items-center md:col-span-2">
                <input type="text" class="placeholder:text-gray-400 outline-0 rounded-xl w-full" placeholder="search">
                <a href="">
                    <ion-icon name="search-outline" class="ml-1 mr-2"></ion-icon>
                </a>
            </div>
            <a class="flex items-center uppercase font-black text-2xl md:text-3xl md:justify-center md:col-span-4"
                href="/">
                <h1 class="cursor-pointer hover:text-teal-400">Reservoir</h1>
            </a>
            <div class="hidden md:flex items-center justify-center gap-8 text-lg font-medium md:col-span-2">
                <a onclick="showCart()">
                    <x-nav-item>
                        <ion-icon name="cart-outline" class="h-7 w-7"></ion-icon>
                        <span class="uppercase text-xs">Cart</span>
                    </x-nav-item>
                </a>
                <a href="/myOrders">
                    <x-nav-item>
                        <ion-icon name="bag-outline" class="h-7 w-7"></ion-icon>
                        <span class="uppercase text-xs">Orders</span>
                    </x-nav-item>
                </a>
                <a href="/chat">
                    <x-nav-item>
                        <ion-icon name="chatbubbles-outline" class="h-7 w-7"></ion-icon>
                        <span class="uppercase text-xs">Chat</span>
                    </x-nav-item>
                </a>
                <a href="/account">
                    <x-nav-item>
                        <ion-icon name="person-outline" class="h-7 w-7"></ion-icon>
                        <span class="uppercase text-xs">Account</span>
                    </x-nav-item>
                </a>

            </div>
            <div class="flex items-center md:hidden" onclick="openNav()">
                <ion-icon name="menu-outline" class="text-xl"></ion-icon>
            </div>
            <div class="sidenav hidden absolute bg-sky-200 z-40 left-0 top-0 overflow-x-hidden duration-[0.5s] pt-[60px] h-screen md:hidden"
                id="mySidenav">
                <a class="flex justify-end text-xl px-2" href="javascript:void(0)" class="closebtn"
                    onclick="closeNav()">&times;</a>
                <x-sidenav-item>
                    <ion-icon name="person-outline" class="text-md"></ion-icon>
                    <a class="py-[8px] pl-[8px] pr-[32px] no-underline text-lg block duration-[0.3s]"
                        href="/account">Account</a>
                </x-sidenav-item>
                <x-sidenav-item>
                    <ion-icon name="heart-outline" class="text-md"></ion-icon>
                    <a class="py-[8px] pl-[8px] pr-[32px] no-underline text-lg block duration-[0.3s]"
                        href="#">Wishlist</a>
                </x-sidenav-item>
                <x-sidenav-item>
                    <ion-icon name="cart-outline" class="text-md"></ion-icon>
                    <a class="py-[8px] pl-[8px] pr-[32px] no-underline text-lg block duration-[0.3s]" href="#">My
                        Cart</a>
                </x-sidenav-item>
            </div>
    </main>

    {{ $slot }}

    <footer class="text-gray-600 body-font">
        <br><br>
        <hr>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap md:text-left text-center order-first">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">WATER TYPES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Distilled</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Purified</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Alkaline</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Mineral</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Store Type</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Residential</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Whole Saler</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Retailer</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>

                <div class="lg:w-2/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">DO YOU HAVE
                        WATER-REFILLING STATION?</h2>
                    <div
                        class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">

                        <button
                            class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-teal-500 border-0 py-2 px-6 focus:outline-none hover:bg-teal-600 rounded">Become
                            a Seller Now!</button>
                    </div>
                    <p class="text-gray-500 text-sm mt-2 md:text-left text-center">Bitters chicharrones fanny pack
                        <br class="lg:block hidden">waistcoat green juice
                    </p>
                </div>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <img src="{{ asset('img/logo.png') }}" alt="" class="h-7 w-7">
                    <span class="ml-3 text-xl">Reservoir</span>
                </a>
                <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">?? 2022 RESERVOIR </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5"
                                ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>


    <x-script />


</body>

</html>
