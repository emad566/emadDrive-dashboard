<?php

namespace App\Http\Livewire\role;
use App\Http\Controllers\General\ConstantController;
use App\Http\Controllers\General\OptionsController;
use App\Http\Traits\Toast;
use \App\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    use WithPagination;
    use Toast;

    public string $search = '';
    public string $permission_search = '';

    public string $sort_field = 'name';
    public string $sort_direction = 'desc';
    protected $queryString = ['sort_field', 'sort_direction'];
    public $paginate;

    public $paginate_list = [];
    public $show_modal = false;
    protected $permissions=[];
    public $selectedPermissionIds = [];

    public Role $roleEdit;
    public function rules(){

        return [
            'roleEdit.name'=>'required|min:3|max:20|unique:roles,name,'.$this->roleEdit?->id,
            'selectedPermissionIds'=>'array',
            'selectedPermissionIds.*'=>'exists:permissions,id',
        ];
    }

    public function edit(Role $role)
    {
        $this->resetInputFields();
        $this->roleEdit = $role;
        $this->selectedPermissionIds = $this->roleEdit->permissions->pluck('id')->toArray();
        $this->show_modal = true;
        $this->dispatchBrowserEvent('alert-show-modal');
    }

    public function destroy(role $role)
    {
        $role->delete();
        $this->dispatchBrowserEvent('alert-delete');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->roleEdit = Role::make();
        $this->selectedPermissionIds=[];
        $this->show_modal = true;
        $this->dispatchBrowserEvent('alert-show-modal');
    }

    private function resetInputFields(){
        $this->resetErrorBag();
    }
    public function save()
    {
        $this->validate();
        $this->roleEdit->save();
        $this->roleEdit->syncPermissions($this->selectedPermissionIds);
        $this->cancel();
        $this->alertSuccess(__('Saved'));
    }

    public function cancel()
    {
        $this->show_modal = false;

    }

    function mount()
    {
        $this->roleEdit = Role::make();
        $this->permissions = Permission::orderBy('id', 'ASC')->take(100)->get();
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
        $roles = Role::search('name', $this->search)
            ->orderBy($this->sort_field, $this->sort_direction);
        return $this->paginate == 'all'? $roles->get() : $roles->paginate($this->paginate);
    }


    function getPermissions(){
        $this->permissions = Permission::search('name', $this->permission_search)->take(30)->get();
        return $this->permissions;
    }



    public function render()
    {
        return view('livewire.role.index', [
            'roles'=> $this->search(),
            'permissions'=> $this->getPermissions(),
        ]);
    }
}
