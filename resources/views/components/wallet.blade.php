 <div class=" w-2/3  bg-white  border shadow-md sm:pt-0 px-5 dark:bg-gray-800 dark:border-gray-700">
    <div class="h-screen grid grid-cols-3">
        <div class="lg:col-span-2 col-span-3 bg-teal-100 space-y-8 px-12">
            <div class="mt-5 p-4 relative flex flex-col sm:flex-row sm:items-center bg-white shadow rounded-md">
                <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                    <div class="text-sm font-medium mx-3">BALANCE</div>
                </div>
                <div class="text-3xl font-black tracking-wide mt-4 sm:mt-0 sm:ml-4">
                    <div class="text-teal-500">
                    ₱ 10,089
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-1">
                <button class="submit-button mx-2 px-4 py-1 rounded-full bg-teal-400 text-white focus:ring focus:outline-none w-1/2 text-xl font-semibold transition-colors">
                    Top Up
                </button>
                <button class="submit-button mx-2 px-4 py-1 rounded-full bg-teal-400 text-white focus:ring focus:outline-none w-1/2 text-xl font-semibold transition-colors">
                    Withdraw
                </button>
            </div>
            <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                Connect external wallet
            </h5>
            <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Connect with one of our available wallet providers.</p>
            <ul class="my-4 space-y-3">
                <li>
                    <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                        <div class="h-16 overflow-hidden justify-center">
                            <img class="h-16 my-auto" src="{{asset("img/gcashlogo.png")}}" alt="">
                        </div>
                        <span class="flex-1 ml-3 whitespace-nowrap">GCash</span>
                        <span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">Popular</span>
                    </a>
                </li>
            </ul>
            <div>
                <a href="#" class="inline-flex items-center text-xs font-normal text-gray-500 hover:underline dark:text-gray-400">
                    <svg class="mr-2 w-3 h-3" aria-hidden="true" focusable="false" data-prefix="far" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z"></path></svg>
                    Why do I need to connect with my wallet?
                </a>
            </div>
        </div>
        <div class="col-span-1 bg-white lg:block hidden px-5">
            <h1 class="py-6 border-b-2 text-xl text-gray-600 px-8">Transaction History</h1>
            <ul class="py-6 space-y-6 px-2">
                <li class="flex gap-2 border-b-1 justify-items-center items-end">
                    <div class="flex flex-col w-2/3 pt-2 ">
                        <span class="text-gray-600 text-xs font-bold">Top up</span>
                        <span class="text-gray-600 text-xs font-thin">ID:XXX000232456</span>
                    </div>
                    <div class="w-1/3 pt-3 ml-2">
                        <div class="flex  space-x-2 text-xs justify-between">
                            <span class="text-teal-400 font-semibold inline-block">₱ 5,349</span>
                        </div>
                    </div>
                </li>
                <li class="flex gap-2 border-b-1 justify-items-center items-end">
                    <div class="flex flex-col w-2/3 pt-2 ">
                        <span class="text-gray-600 text-xs font-bold">Paid</span>
                        <span class="text-gray-600 text-xs font-thin">ID:XXX05782456</span>
                    </div>
                    <div class="w-1/3 pt-3 ml-2">
                        <div class="flex  space-x-2 text-xs justify-between">
                            <span class="text-teal-400 font-semibold inline-block">₱ 79</span>
                        </div>
                    </div>
                </li>
                <li class="flex gap-2 border-b-1 justify-items-center items-end">
                    <div class="flex flex-col w-2/3 pt-2 ">
                        <span class="text-gray-600 text-xs font-bold">Widthdrawal</span>
                        <span class="text-gray-600 text-xs font-thin">ID:XXX00856856</span>
                    </div>
                    <div class="w-1/3 pt-3 ml-2">
                        <div class="flex  space-x-2 text-xs justify-between">
                            <span class="text-teal-400 font-semibold inline-block">₱ 569</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

