<?php

namespace App\Http\Livewire\Captain;

use App\Models\Captain;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $search = '';
    public string $sort_field = 'captain_code';
    public string $sort_direction = 'desc';

    protected $queryString = ['sort_field', 'sort_direction'];

    public function sortBy($sort_field)
    {
        if($this->sort_field === $sort_field){
            $this->sort_direction = $this->sort_direction === 'asc'? 'desc' : 'asc';
        } else {
            $this->sort_direction = 'asc';
        }
        $this->sort_field = $sort_field;
    }



    public function render()
    {
        return view('livewire.captain.index', [
            'captains'=>Captain::search('full_name', $this->search)
                ->orSearch('mobile', $this->search)
                ->orderBy($this->sort_field, $this->sort_direction)
                ->paginate(10)
        ]);
    }
}
