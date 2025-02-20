<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Reactive;

/**
 * The invoices table Livewire component.
 */
class InvoicesTable extends Component
{
    /**
     * The invoices to display.
     * 
     * @var array
     */
    #[Reactive]
    public $invoices;

    /**
     * The number of invoices to display.
     * 
     * @var int
     */
    public function render()
    {
        return view('livewire.invoices-table');
    }

    /**
     * Load more invoices.
     * 
     * @return void
     */
    public function loadMore()
    {
        $this->dispatch('loadMore');
    }
}
