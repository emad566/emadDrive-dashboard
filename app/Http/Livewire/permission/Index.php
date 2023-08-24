<?php

namespace App\Http\Livewire\permission;
use App\Http\Controllers\General\ConstantController;
use App\Http\Controllers\General\OptionsController;
use App\Http\Traits\Toast;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    use WithPagination;
    use Toast;

    public string $search = '';
    public string $sort_field = 'name';
    public string $sort_direction = 'desc';
    protected $queryString = ['sort_field', 'sort_direction'];
    public $paginate;

    public $paginate_list = [];
    public $show_modal = false;

    public Permission $permissionEdit;
    public function rules(){

        return [
            'permissionEdit.name'=>'required|min:1|max:20',
        ];
    }

    public function edit(Permission $permission)
    {
        $this->resetInputFields();
        $this->permissionEdit = $permission;
        $this->show_modal = true;
    }

    public function destroy(permission $permission)
    {
        $permission->delete();
        $this->dispatchBrowserEvent('alert-delete');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->permissionEdit = Permission::make();
        $this->show_modal = true;
    }

    private function resetInputFields(){
        $this->resetErrorBag();
    }
    public function save()
    {
        $this->validate();
        $this->permissionEdit->save();
        $this->cancel();
        $this->alertSuccess(__('Saved'));
    }

    public function cancel()
    {
        $this->show_modal = false;

    }

    function mount()
    {
        $this->permissionEdit = Permission::make();
        $this->paginate_list = OptionsController::PAGINATE_LIST;
        $this->paginate = ConstantController::LARGE_NUMBER_OF_PAGINATE;
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
        $permissions = Permission::search('name', $this->search)
            ->orderBy($this->sort_field, $this->sort_direction);
        return $this->paginate == 'all'? $permissions->get() : $permissions->paginate($this->paginate);
    }



    public function render()
    {
        return view('livewire.permission.index', [
            'permissions'=> $this->search()
        ]);
    }
}
