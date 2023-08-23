<?php

namespace App\Http\Livewire\role;
use App\Http\Controllers\General\OptionsController;
use App\Http\Traits\Toast;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    use WithPagination;
    use Toast;

    public string $search = '';
    public string $sort_field = 'name';
    public string $sort_direction = 'desc';
    protected $queryString = ['sort_field', 'sort_direction'];
    public $paginate = 5;

    public $paginate_list = [];
    public $show_modal = false;

    public Role $role;
    public function rules(){

        return [
            'role.name'=>'required|min:3|max:20|unique:roles,name,'.$this->role->id,
        ];
    }

    public function edit(Role $role)
    {
        $this->resetInputFields();
        $this->role = $role;
        $this->show_modal = true;
    }

    public function destroy(role $role)
    {
        $role->delete();
//        $this->alertSuccess(__('Has been deleted.'));
        $this->dispatchBrowserEvent('alert-delete');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->role = Role::make();
        $this->show_modal = true;
    }

    private function resetInputFields(){
        $this->resetErrorBag();
    }
    public function save()
    {
        $this->validate();
        $this->role->save();
        $this->cancel();
        $this->alertSuccess(__('Saved'));
    }

    public function cancel()
    {
        $this->show_modal = false;

    }

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
        $roles = Role::search('name', $this->search)
            ->orderBy($this->sort_field, $this->sort_direction);
        return $this->paginate == 'all'? $roles->get() : $roles->paginate($this->paginate);
    }



    public function render()
    {
        return view('livewire.role.index', [
            'roles'=> $this->search()
        ]);
    }
}
