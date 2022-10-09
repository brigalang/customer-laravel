<x-layout>

    <main class="grid gap-2 lg:px-[250px] py-5">
        <div class="grid grid-cols-1 bg-orange-50 lg:gap-1 lg:grid-cols-8 ">
            <div class="bg-green-50 h-auto lg:col-span-5 overflow:hidden">
                <x-carousel />
            </div>

            <div class="bg-white text-white h-auto lg:col-span-3 ">
                <div class="grid gap-1 lg:grid-rows-2">
                    <div class="bg-cyan-300 h-fit lg:row-span-1">
                        <h2>n</h2>
                        <h2>n</h2>
                        <h2>n</h2>
                        <h2>n</h2>
                        <h2>n</h2>
                        <h2>n</h2>
                    </div>
                    <div class="bg-cyan-300 h-fit lg:row-span-1">
                        <h1>n</h1>
                        <h2>n</h2>
                        <h2>n</h2>
                        <h2>n</h2>
                        <h2>n</h2>

                    </div>
                </div>
            </div>
        </div>

        <div class="p-5 bg-white mt-2 lg:mt-5">
            <div class="grid grid-cols-3  gap-x-10 gap-y-4 items-center justify-center sm:grid-cols-5 lg:flex">
                <x-box>
                    <div class="p-2 w-12 h-12 rounded-lg border flex items-center justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/217/217853.png" alt="">
                    </div>
                    <span class="text-xs text-center">Coin Rewards</span>
                </x-box>
                <x-box>
                    <div class="p-2 w-12 h-12 rounded-lg border flex items-center justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/6831/6831000.png" alt="">
                    </div>
                    <span class="text-xs text-center">Free Shipping</span>
                </x-box>
                <x-box>
                    <div class="p-2 w-12 h-12 rounded-lg border flex items-center justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/869/869649.png" alt="">
                    </div>
                    <span class="text-xs text-center">Vouchers</span>
                </x-box>
                <x-box>
                    <div class="p-2 w-12 h-12 rounded-lg border flex items-center justify-center">
                        <img src="https://static.thenounproject.com/png/3312623-200.png" alt="">
                    </div>
                    <span class="text-xs text-center">Reservoir Loyalty</span>
                </x-box>
                <x-box>
                    <div class="p-2 w-12 h-12 rounded-lg border flex items-center justify-center">
                        <img src="https://static.thenounproject.com/png/1968982-200.png" alt="">
                    </div>
                    <span class="text-xs text-center">All Promos</span>
                </x-box>

            </div>
        </div>
        <x-panel><img src="{{ asset('img\banner1.png')}}" ></x-panel>
        <x-panel class="h-auto">
            <div class="grid grid-cols-3 gap-2 lg:grid-cols-6">
                <x-store-card>Purified</x-store-card>
                <x-store-card>Mineral</x-store-card>
                <x-store-card>Distilled</x-store-card>
                <x-store-card>Alkaline</x-store-card>
                <x-store-card>Electrolyte</x-store-card>
                <x-store-card>Containers</x-store-card>
            </div>
        </x-panel>
        <x-panel>flash deals</x-panel>


        <div class="grid grid-cols-9 gap-3 my-4 h-36 overflow-hidden">
            <x-banner><img src="{{ asset('img\banner1.png')}}" ></x-banner>
            <x-banner><img src="{{ asset('img\banner1.png')}}" ></x-banner>
            <x-banner><img src="{{ asset('img\banner1.png')}}" ></x-banner>
        </div>

        <x-panel class="h-60 my-4">Top Products</x-panel>

        <x-panel class="h-10 mb-3 flex items-center font-bold p-2">Store List</x-panel>

        <div class="grid grid-cols-3 gap-2 h-fit lg:grid-cols-6">
            <x-store-card><img src="{{ asset('img\logo1.png')}}"></x-store-card>
            <x-store-card><img src="{{ asset('img\logo2.png')}}"></x-store-card>
            <x-store-card><img src="{{ asset('img\logo3.png')}}"></x-store-card>
            <x-store-card><img src="{{ asset('img\logo4.png')}}"></x-store-card>
            <x-store-card><img src="{{ asset('img\logo5.png')}}"></x-store-card>
            <x-store-card><img src="{{ asset('img\logo6.png')}}"></x-store-card>

        </div>


    </main>

</x-layout>


