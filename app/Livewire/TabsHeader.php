<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

/**
 * The tabs header Livewire component.
 */
class TabsHeader extends Component
{
    /**
     * The active tab.
     *
     * @var string
     */
    #[Reactive]
    public $activeTab;

    /**
     * Mount the component with the given active tab.
     *
     * @param string $activeTab The tab to set as active on mount.
     * @return void
     */
    public function mount($activeTab)
    {
        $this->activeTab = $activeTab;
    }

    /**
     * Render the Livewire component view.
     *
     * @return \Illuminate\View\View The view for the Livewire component.
     */
    public function render()
    {
        return view('livewire.tabs-header');
    }

    /**
     * Set the active tab and dispatch an event.
     *
     * @param string $tab The tab to set as active.
     * @return void
     */
    public function setActiveTab($tab)
    {
        // $this->activeTab = $tab;
        $this->dispatch('setTab', $tab);
    }
}
