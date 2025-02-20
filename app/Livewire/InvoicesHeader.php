<?php

namespace App\Livewire;

use Livewire\Component;

/**
 * The invoices header Livewire component.
 */
class InvoicesHeader extends Component
{
    /**
     * Render the component.
     * 
     * @return \Illuminate\View\View The rendered view.
     */
    public function render()
    {
        return view('livewire.invoices-header');
    }
}
