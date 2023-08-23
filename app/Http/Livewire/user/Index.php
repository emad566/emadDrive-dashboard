<?php

namespace App\Http\Livewire\user;
use App\Http\Controllers\General\OptionsController;
use App\Models\user;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $search = '';
    public string $sort_field = 'name';
    public string $sort_direction = 'desc';
    protected $queryString = ['sort_field', 'sort_direction'];
    public $paginate = 5;
    public $paginate_list = [];

    function mount()
    {
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
        $users = User::search('name', $this->search)
            ->orSearch('mobile', $this->search)
            ->orSearch('email', $this->search)
            ->orderBy($this->sort_field, $this->sort_direction);
        return $this->paginate == 'all'? $users->get() : $users->paginate($this->paginate);
    }



    public function render()
    {
        return view('livewire.user.index', [
            'users'=> $this->search()
        ]);
    }
}
