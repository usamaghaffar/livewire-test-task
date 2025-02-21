<tr class="border-b border-gray-300" x-data="{isDropdownOpen: false}" wire:init="showDropdown">
    <td class="px-4 py-2 text-sm sm:text-base">
        <span class="inline-block">${{ number_format($invoice->amount, 2) }} </span> <span class="inline-block ml-3.5"> USD</span>
        <img src="/images/arrows-rotate.svg" alt=""
            class="h-4 w-4 mx-3.5 inline-block opacity-45">
        <span class="inline-block bg-gray-200 text-gray-500 text-sm px-2 rounded-[3px] capitalize">
        {{ $invoice->status->label() }}</span>
    </td>
    <td class="px-4 py-2 text-sm sm:text-base">{{ $invoice->invoice_number }}</td>
    <td class="px-4 py-2 text-sm sm:text-base">{{ $invoice->customer_email }}</td>
    <td class="px-4 py-2 text-sm sm:text-base"> <span
            class="border-b border-gray-500 w-2.5 block"></span> </td>
    <td class="px-4 py-2 text-sm sm:text-base">
        <div class="flex ">
            <div class="flex">
                <span class="block">{{ $invoice->created_date->format('M d, h:m a') }}</span>
                <button
                    class="static px-3 h-8 align-middle bg-white cursor-pointer ml-2.5 block rounded-sm border transition delay-100 duration-300 group hover:shadow-lg hover:border-gray-300"
                    :class="{ 'border-gray-300 shadow-lg border': isDropdownOpen }"
                    x-on:click.prevent="isDropdownOpen = !isDropdownOpen" x-on:click.away="isDropdownOpen = false">
                    <img src="/images/down arrow.svg" alt=""
                        class="h-6 w-6 opacity-45 pr-2.5 mr-1.5 border-r border-gray-400 group-hover:inline-block hidden"
                        :class="{'inline-block': isDropdownOpen}">
    
                    <a href="javascript:;">
                        <img src="/images/ellipsis.svg" alt=""
                            class="inline-block h-5 w-5 opacity-45 group-hover:shadow-lg">
                    </a>
                </button>
            </div>
                @if($isOpenDropdown)
                <div
                    x-show="isDropdownOpen"
                    class="absolute z-10 mt-7 px-2.5 py-2 w-46 bg-white border border-gray-300 rounded-[5px] shadow-lg">
                    <div class="text-gray-400 uppercase text-sm font-semibold">actions</div>
                    <a href="#" class="block pt-2 text-sm text-blue-800 font-semibold">Download PDF</a>
                    <a href="#" class="block pt-2 text-sm text-blue-800 font-semibold">Duplicate
                        invoice</a>
                    <a href="#" class="block pt-2 text-sm text-red-800 semibold">Download draft</a>
                    <div class="border-b border-gray-300 my-2"></div>
                    <div class="text-gray-400 uppercase text-sm font-semibold">connections</div>
                    <a href="#" class="block pt-2 text-sm text-blue-800 semibold">
                        View Customer
                        <img src="/images/view-customer.svg" alt="" class="h-4 w-4 inline-block">
                    </a>
                </div>
                @endif
            
        </div>
    </td>
</tr>