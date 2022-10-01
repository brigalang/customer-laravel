<x-head />

<body class="bg-gray-50">
    <header class="py-10 px-2 md:px-40">
        <nav class="flex justify-between">
            <div class="flex">
                <img class="mr-2" src="" alt="logo">
                <a href="/index">
                    <h1 class="font-semibold text-xl">Reservoir | Shopping Cart</h1>
                </a>
            </div>

            <form class="flex items-center" action="" method="get">
                <div class="border border-gray-500 p-1 w-60 rounded-md">
                    <input class="border-none outline-none w-full" type="text"
                        placeholder="Search item in your cart here">
                </div>
                <button type="submit" class="bg-blue-300 p-2 rounded-md hover:bg-blue-400">
                    <x-icon name="search" />
                </button>
            </form>
        </nav>
    </header>

    {{ $slot }}


    <footer class="bg-white h-36 mt-10 border-t-2 border-blue-500 flex items-center px-10">
        <div>Footer Here</div>
    </footer>

    <script>
        $(document).ready(function() {
            $('.minus').click(function() {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function() {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        });
    </script>
</body>

</html>
