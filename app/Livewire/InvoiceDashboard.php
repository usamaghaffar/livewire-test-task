<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Invoice;
use Livewire\Attributes\On;
use Livewire\WithPagination;

/**
 * The invoice dashboard Livewire component.
 */
class InvoiceDashboard extends Component
{
    use WithPagination;

    /**
     * The active tab.
     * 
     * @var string
     */
    public $activeTab = 'all';

    /**
     * Set the active tab.
     * 
     * @param string $tab The tab to set as active.
     * @return void
     */
    #[On('setTab')]
    public function setTab($tab)
    {
        $this->activeTab = $tab;
        $this->resetPage(); // Reset pagination when switching tabs
    }

    /**
     * Render the component.
     * 
     * @return \Illuminate\View\View The rendered view.
     */
    public function render()
    {
        $query = Invoice::query();

        if ($this->activeTab !== 'all') {
            $query->where('status', $this->activeTab);
        }

        return view('livewire.invoice-dashboard', [
            'invoices' => $query->paginate(20),
        ])
        ->layout(\App\View\Components\InvoicesLayout::class);
    }
}
