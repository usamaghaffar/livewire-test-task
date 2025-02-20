<div class="flex border-b border-gray-300 mb-4">
    <button
        class="py-2 mr-6 text-gray-500 text-sm font-semibold transition ease-in duration-500 hover:text-blue-800 border-b-2 border-transparent hover:border-blue-800 sm:text-lg {{ $activeTab === 'all' ? 'border-b-2 border-blue-800' : '' }}"
        wire:click="setActiveTab('all')">
        All invoices
    </button>
    <button
        class="py-2 mr-6 text-gray-500 text-sm font-semibold transition ease-in duration-500 hover:text-blue-800 border-b-2 border-transparent hover:border-blue-800 sm:text-lg {{ $activeTab === 'draft' ? 'border-b-2 border-blue-800' : '' }}"
        wire:click="setActiveTab('draft');">
        Draft
    </button>
    <button
        class="py-2 mr-6 text-gray-500 text-sm font-semibold transition ease-in duration-500 hover:text-blue-800 border-b-2 border-transparent hover:border-blue-800 sm:text-lg {{ $activeTab === 'outstanding' ? 'border-b-2 border-blue-800' : '' }}"
        wire:click="setActiveTab('outstanding');">
        Outstanding
    </button>
    <button
        class="py-2 mr-6 text-gray-500 text-sm font-semibold transition ease-in duration-500 hover:text-blue-800 border-b-2 border-transparent hover:border-blue-800 sm:text-lg {{ $activeTab === 'past_due' ? 'border-b-2 border-blue-800' : '' }}"
        wire:click="setActiveTab('past_due');">
        Past due
    </button>
    <button
        class="py-2 mr-6 text-gray-500 text-sm font-semibold transition ease-in duration-500 hover:text-blue-800 border-b-2 border-transparent hover:border-blue-800 sm:text-lg {{ $activeTab === 'paid' ? 'border-b-2 border-blue-800' : '' }}"
        wire:click="setActiveTab('paid');">
        Paid
    </button>
</div>