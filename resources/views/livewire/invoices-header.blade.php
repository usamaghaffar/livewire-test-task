<div>

    <div class="flex flex-col justify-between items-center mb-10 pb-4 border-b border-gray-300 sm:flex-row sm:pb-0">
        <div class="flex items-center overflow-hidden p-2 w-full sm:max-w-md">
            <svg class="w-5 h-5 text-gray-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 19a8 8 0 100-16 8 8 0 000 16zM21 21l-4.35-4.35" />
            </svg>
            <input type="text" placeholder="Search..."
                class="w-full outline-none border-b border-gray-300 text-base text-gray-500 font-semibold pb-1.5 mb-4 sm:border-0 sm:pb-0 sm:mb-0" />
        </div>
        <div class="flex">
            <a href="#" class="block transition ease-in duration-500 text-base text-gray-400 hover:text-blue-800">
                <img src="/images/volume-low.svg" class="h-4 w-4 inline-block opacity-45 mb-1" alt="">
                feedback?
            </a>
            <a href="#" class="block ml-3.5 relative">
                <img src="/images/bell.svg" alt="" class="h-5 w-5 opacity-45">
                <div
                    class="absolute inline-flex items-center justify-center w-5 h-5 text-[10px] font-bold text-white bg-red-800 border-2 border-white rounded-full -top-1 -end-2 dark:border-gray-900">
                    1</div>
            </a>
            <a href="#" class="block ml-3.5">
                <img src="/images/circle-question.svg" alt="" class="h-5 w-5 opacity-45">
            </a>
            <a href="#" class="block ml-3.5">
                <img src="/images/user.svg" alt="" class="h-5 w-5 opacity-45">
            </a>
        </div>
    </div>
    
    <div
        class="flex flex-col justify-between items-center pb-4 border-b border-gray-300 mb-4 sm:flex-row sm:border-0 sm:pb-0">
        <h2 class="text-4xl font-bold text-gray-900 mb-3.5 sm:mb-0">Invoices</h2>
        <div class="space-x-2">
            <button
                class="px-4 py-1.5 border border-gray-300 font-semibold transition ease-in duration-500 bg-white text-gray-500 rounded-md shadow-md group hover:bg-blue-800 hover:text-white cursor-pointer">
                <img src="/images/filter.svg" alt=""
                    class="w-4 mr-1.5 opacity-45 inline-block group-hover:hidden">
                <img src="/images/filter-white.svg" alt="" class="w-4 mr-1.5 hidden group-hover:inline-block">
                Filter
            </button>
            <button
                class="px-4 py-1.5 border border-gray-300 font-semibold transition ease-in duration-500 bg-white text-gray-500 rounded-md shadow-md group hover:bg-blue-800 hover:text-white cursor-pointer">
                <img src="/images/export.svg" alt=""
                    class="w-4 mr-1.5 opacity-45 inline-block group-hover:hidden">
                <img src="/images/export-white.svg" alt="" class="w-4 mr-1.5 hidden group-hover:inline-block">
                Export
            </button>
            <button
                class="px-4 py-1.5 border border-blue-200 font-semibold transition ease-in duration-500 bg-blue-800 text-white rounded-md hover:bg-gray-600 hover:text-white cursor-pointer">
                <img src="/images/plus-white.svg" alt="" class="w-4 mr-1.5 inline-block"> Create invoice <span
                    class="inline-block bg-blue-300 text-white rounded-md text-sm px-1 h-5">N</span>
            </button>
        </div>
    </div>
</div>