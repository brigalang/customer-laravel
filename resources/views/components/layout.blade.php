<x-head />

<body class="font-Poppins">
    <main class="">
        <header
            class="flex flex-row-reverse justify-between relative z-1 gap-2 p-5 md:items-center md:justify-center md:p-10 md:grid md:grid-cols-8 lg:p-12 ">
            <div class="p-1 rounded-xl border gap-x-2 flex items-center md:col-span-2">
                <ion-icon name="search-outline"></ion-icon>
                <input type="text" class="placeholder:text-gray-400 outline-0 w-full" placeholder="search">
            </div>
            <a class="flex items-center uppercase font-black text-2xl md:text-3xl md:justify-center md:col-span-4"
                href="/index">
                <h1 class="cursor-pointer hover:text-sky-400">Reservoir</h1>
            </a>
            <div class="hidden md:flex items-center justify-center gap-8 text-lg font-medium md:col-span-2">
                <x-nav-item>
                    <ion-icon name="person-outline"></ion-icon>
                    <span class="uppercase text-xs"><a href="/account">Account</a></span>
                </x-nav-item>

                <x-nav-item>
                    <ion-icon name="heart-outline"></ion-icon>
                    <span class="uppercase text-xs"><a href="/wishlist">Wishlist</a></span>
                </x-nav-item>

                <x-nav-item>
                    <ion-icon name="cart-outline"></ion-icon>
                    <span class="uppercase text-xs"><a href="/cart">My Cart</a></span>
                </x-nav-item>
            </div>
            <div class="flex items-center md:hidden" onclick="openNav()">
                <ion-icon name="menu-outline" class="text-xl"></ion-icon>
            </div>
            <div class="sidenav hidden fixed bg-sky-200 z-2 left-0 top-0 overflow-x-hidden duration-[0.5s] pt-[60px] h-screen md:hidden"
                id="mySidenav">
                <a class="flex justify-end text-xl px-2" href="javascript:void(0)" class="closebtn"
                    onclick="closeNav()">&times;</a>
                <x-sidenav-item>
                    <ion-icon name="person-outline" class="text-md"></ion-icon>
                    <a class="py-[8px] pl-[8px] pr-[32px] no-underline text-lg block duration-[0.3s]"
                        href="#">Account</a>
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

    <footer class="bg-white h-36 mt-10 border-t-2 border-blue-500 flex items-center px-10">
        <div>Footer Here</div>
    </footer>


    <script>
        /* Set the width of the side navigation to 150px and display block */
        function openNav() {
            document.getElementById("mySidenav").style.width = "150px";
            document.getElementById("mySidenav").style.display = "block";
        }

        /* Set the width of the side navigation to 0 and display hidden */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("mySidenav").style.display = "hidden";
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
