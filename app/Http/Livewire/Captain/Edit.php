<?php

namespace App\Http\Livewire\Captain;

use App\Http\Traits\Toast;
use Livewire\Component;

class Edit extends Component
{
    use Toast;
    protected $listeners = ['refresh-captain'=>'refresh_captain'];
    public $captain;
    public $tab='t1';
    public $isActive;

    function mount($captain)
    {
        $this->captain = $captain;
        $this->isActive = $this->captain->is_active;
    }

    function updatedIsActive(){
        $this->captain->update(['is_active'=>$this->isActive?? 0]);
        $this->alertSuccess(__('Saved'));
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
