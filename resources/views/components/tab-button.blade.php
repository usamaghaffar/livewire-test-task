@props([
    'isActive' => false,
    'label' => 'All Invoices',
    'key' => 'all'
])
<button
@class([
    'py-2 mr-6 text-gray-500 text-sm font-semibold transition ease-in duration-500 hover:text-blue-800 border-b-2 hover:border-blue-800 sm:text-lg',
    'border-b-2 border-blue-800' => $isActive,
    'border-transparent' => !$isActive
])
wire:click="$dispatch('setTab', {tab: '{{$key}}'})">
{{ $label }}
</button>