<?php

namespace App\Livewire\Captain;

use App\Http\Controllers\General\OptionsController;
use App\Http\Traits\Toast;
use App\Models\Captain;
use Livewire\Component;
use Livewire\WithPagination;

class Captains extends Component
{
    use WithPagination, Toast;

    public string $search = '';
    public string $sort_field = 'captain_code';
    public string $sort_direction = 'desc';
    public string $selectStatus = 'all';

    protected $queryString = ['sort_field', 'sort_direction'];
    public $captain_options;
    public $paginate = 5;
    public $paginate_list = [];

    function mount()
    {

        $this->captain_options = OptionsController::CAPTAIN_STATUS;
        $this->paginate_list = OptionsController::PAGINATE_LIST;
    }

    public function sortBy($sort_field)
    {
        if($this->sort_field === $sort_field){
            $this->sort_direction = $this->sort_direction === 'asc'? 'desc' : 'asc';
        } else {
            $this->sort_direction = 'asc';
        }
        $this->sort_field = $sort_field;
    }



    function search()
    {
        $captains = Captain::search('full_name', $this->search)
            ->orSearch('mobile', $this->search)
            ->orderBy($this->sort_field, $this->sort_direction);

        if($this->selectStatus == 'active'){
            $captains = $captains->where('is_active', 1);
        }

        if($this->selectStatus == 'underReview'){
            $captains = $captains->where('is_active', 0)->where('register_step', '>', 1);
        }

        if($this->selectStatus == 'registration'){
            $captains = $captains->where('register_step', '<', 2);
        }

        return  ($this->paginate == 'all')? $captains->get() : $captains->paginate($this->paginate);
    }



    public function render()
    {
        return view('livewire.captain.captain')->with([
            'captains'=> $this->search()
        ]);
    }
}
