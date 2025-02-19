<div class="max-w-4xl mx-auto p-6 bg-white shadow rounded-lg">
    <!-- Tabs -->
    <div class="flex space-x-4 border-b">
        @foreach(['all' => 'All Invoices', 'draft' => 'Draft', 'outstanding' => 'Outstanding', 'paid' => 'Paid'] as $key => $label)
            <button wire:click="setTab('{{ $key }}')"
                class="py-2 px-4 text-sm font-semibold border-b-2 {{ $activeTab === $key ? 'border-blue-500 text-blue-500' : 'border-transparent text-gray-500' }}">
                {{ $label }}
            </button>
        @endforeach
    </div>

    <!-- Invoice Table -->
    <table class="w-full mt-4 border-collapse">
        <thead>
            <tr class="text-left border-b">
                <th class="p-2">Amount</th>
                <th class="p-2">Invoice #</th>
                <th class="p-2">Email</th>
                <th class="p-2">Status</th>
                <th class="p-2">Date</th>
                <th class="p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoices as $invoice)
                <tr class="border-b">
                    <td class="p-2">${{ number_format($invoice->amount, 2) }}</td>
                    <td class="p-2">{{ $invoice->invoice_number }}</td>
                    <td class="p-2">{{ $invoice->customer_email }}</td>
                    <td class="p-2">
                        <span class="px-2 py-1 rounded text-white text-xs {{ $invoice->status === 'Paid' ? 'bg-green-500' : ($invoice->status === 'Outstanding' ? 'bg-yellow-500' : 'bg-gray-500') }}">
                            {{ $invoice->status }}
                        </span>
                    </td>
                    <td class="p-2">{{ $invoice->created_date }}</td>
                    <td class="p-2">
                        <button class="text-gray-500 hover:text-gray-700">⋮</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
