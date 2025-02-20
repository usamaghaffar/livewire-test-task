<div class="overflow-x-auto">
    <table class="table-fixed w-full border-collapse border-0">
        <thead>
            <tr>
                <th
                    class="px-4 py-2 border-b border-gray-300 text-gray-500 text-sm uppercase text-left w-[240px] sm:text-base">
                    Amount</th>
                <th
                    class="px-4 py-2 border-b border-gray-300 text-gray-500 text-sm uppercase text-left w-[180px] sm:text-base">
                    Invoice number</th>
                <th
                    class="px-4 py-2 border-b border-gray-300 text-gray-500 text-sm uppercase text-left w-[450px] sm:text-base">
                    Customer
                    <img src="/images/gear.svg" alt="" class="h-3 w-3 mb-1 inline-block opacity-45">
                </th>
                <th
                    class="px-4 py-2 border-b border-gray-300 text-gray-500 text-sm uppercase text-left w-[110px] sm:text-base">
                    Due</th>
                <th
                    class="px-4 py-2 border-b border-gray-300 text-gray-500 text-sm uppercase text-left w-[220px] sm:text-base">
                    Created</th>
            </tr>
        </thead>

        <tbody>
            @foreach($invoices as $invoice)
            <livewire:invoices-data :invoice="$invoice" :key="$invoice->id" />
            @endforeach
        </tbody>
    </table>
</div>