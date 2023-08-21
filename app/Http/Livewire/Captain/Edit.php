<?php

namespace App\Http\Livewire\Captain;

use Livewire\Component;

class Edit extends Component
{
    protected $listeners = ['refresh-captain'=>'refresh_captain'];
    public $captain;
    public $tab='t1';

    function mount($captain)
    {
        $this->captain = $captain;
    }

    function tab($tab)
    {
        $this->tab = $tab;
    }

    function refresh_captain()
    {
        $this->captain->refresh;
    }

    public function render()
    {
        return view('livewire.captain.edit', [
            'captain'=>$this->captain
        ]);
    }
}
