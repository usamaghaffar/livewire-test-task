<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Invoice;

class InvoiceDashboard extends Component
{
    public $activeTab = 'all';

    public function setTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        $query = Invoice::query();

        if ($this->activeTab !== 'all') {
            $query->where('status', ucfirst($this->activeTab));
        }

        return view('livewire.invoice-dashboard', [
            'invoices' => $query->get()
        ]);
    }
}
