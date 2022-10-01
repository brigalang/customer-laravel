<x-layout>

    <main class="grid gap-2 lg:px-[250px] py-5">
        <div class="grid grid-cols-1 bg-orange-50 lg:gap-1 lg:grid-cols-8">
            <div class="bg-green-50 h-auto lg:col-span-5">
                1
            </div>

            <div class="bg-blue-50 h-auto lg:col-span-3">
                <div class="grid gap-1 lg:grid-rows-2">
                    <div class="bg-green-200 h-auto lg:row-span-1">
                        2
                    </div>
                    <div class="bg-yellow-200 h-auto lg:row-span-1">
                        3
                    </div>
                </div>
            </div>
        </div>

        <div class="p-5 bg-white mt-2 lg:mt-5">
            <div class="grid grid-cols-3  gap-x-10 gap-y-4 items-center justify-center sm:grid-cols-5 lg:flex">
                <x-box />
                <x-box />
                <x-box />
                <x-box />
                <x-box />
                <x-box />
                <x-box />
                <x-box />
                <x-box />
            </div>
        </div>

        <x-panel>ads</x-panel>
        <x-panel>categories</x-panel>
        <x-panel>flash deals</x-panel>


        <div class="grid grid-cols-9 gap-3 mt-4">
            <x-banner>ads banner 1</x-banner>
            <x-banner>ads banner 2</x-banner>
            <x-banner>ads banner 3</x-banner>
        </div>

        <x-panel class="h-60">Top Products</x-panel>

        <x-panel class="h-10 mb-3 flex items-center font-bold p-2">Store List</x-panel>

        <div class="grid grid-cols-3 gap-2 lg:grid-cols-6">
            <x-store-card>1</x-store-card>
            <x-store-card>2</x-store-card>
            <x-store-card>3</x-store-card>
            <x-store-card>4</x-store-card>
            <x-store-card>5</x-store-card>
            <x-store-card>6</x-store-card>

        </div>

    </main>

</x-layout>
