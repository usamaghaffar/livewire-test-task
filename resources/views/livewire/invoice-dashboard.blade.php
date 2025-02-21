<div class="mb-10">
    <livewire:tabs-header :activeTab="$activeTab" />

    <livewire:invoices-table :invoices="$invoices->items()" />
    <div class="mt-8">
        {{ $invoices->links() }}
    </div>
</div>
