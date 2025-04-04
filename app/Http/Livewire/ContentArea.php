<?php
namespace App\Http\Livewire;

use Livewire\Component;

class ContentArea extends Component
{
    public $page = 'home'; // Página inicial padrão

    protected $listeners = ['changePage' => 'setPage']; // Ouvindo eventos do menu

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function render()
    {
        return view('livewire.content-area');
    }
}
