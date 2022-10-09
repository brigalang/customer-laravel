<x-head>Reservoir | Login</x-head>
<x-layout>

    <main class="px-6 py-8 flex items-center justify-center">
        <div class="bg-gray-200 border border-gray-300 w-[500px] p-5 rounded-xl">
            <h1 class="text-xl uppercase font-bold text-center">Log In!</h1>
            <form class="mt-5" action="" method="post">
                @csrf
                <x-input>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="email" id="email"
                        required>
                </x-input>
                <x-input>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
                    <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password"
                        required>
                </x-input>
                <x-input>
                    <button class="px-5 py-2 bg-blue-400 text-white hover:bg-blue-500" type="submit">Log In</button>
                </x-input>
            </form>
        </div>
    </main>

</x-layout>
