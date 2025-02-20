@php 
use App\Enums\InvoiceStatus;
@endphp

<div class="flex border-b border-gray-300 mb-4">

    <x-tab-button :is-active="$activeTab === 'all'" />
    @foreach(InvoiceStatus::cases() as $status)
        <x-tab-button :is-active="$activeTab === $status->value" label="{{ $status->label() }}" :key="$status->value" />
    @endforeach
    
</div>