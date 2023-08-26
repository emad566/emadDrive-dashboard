<?php

namespace App\Http\Livewire\permission;
use App\Http\Controllers\General\ConstantController;
use App\Http\Controllers\General\OptionsController;
use App\Http\Traits\Toast;
use App\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

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
    public $all_permissions;


    public function rules(){

        return [
            'permissionEdit.name'=>'required|min:1|max:20|unique:permissions,name,'.$this->permissionEdit?->id,
            'permissionEdit.parent_id'=>'nullable|exists:permissions,id',
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
        if($this->permissionEdit?->id == $this->permissionEdit->parent_id){
            $this->addError('permissionEdit.parent_id', 'Item can not be parent for it self!!');
            return;
        }
        if(!$this->permissionEdit->parent_id) $this->permissionEdit->parent_id=0;
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
        $this->all_permissions = Permission::all();
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
        try {
            $permissions = Permission::search('name', $this->search)
                ->orderBy($this->sort_field, $this->sort_direction);
            return $this->paginate == 'all'? $permissions->get() : $permissions->paginate($this->paginate);
        }catch (\Throwable $th){
            $this->alertError('Server Error', $th);
            return [];
        }

    }



    public function render()
    {
        if($this->show_modal){
            $this->dispatchBrowserEvent('alert-show-model');
        }

        return view('livewire.permission.index', [
            'permissions'=> $this->search()
        ]);

    }
}
