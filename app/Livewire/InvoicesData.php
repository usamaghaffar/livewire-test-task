<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Reactive;

/**
 * The invoices data Livewire component.
 */
class InvoicesData extends Component
{
    #[Reactive]
    public $invoice = [];

    /**
     * Render the component.
     * 
     * @return \Illuminate\View\View The rendered view.
     */
    public function render()
    {
        return view('livewire.invoices-data');
    }
}
