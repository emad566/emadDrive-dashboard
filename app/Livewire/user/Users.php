<?php

namespace App\Livewire\user;
use App\Http\Controllers\General\ConstantController;
use App\Http\Controllers\General\OptionsController;
use App\Http\Traits\Toast;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Users extends Component
{
    use WithPagination, Toast;

    public string $search = '';
    public string $sort_field = 'name';
    public string $sort_direction = 'desc';
    protected $queryString = ['sort_field', 'sort_direction'];
    public $paginate;

    public $paginate_list = [];

    public $show_modal = false;
    public $is_edit = false;

    public User $userEdit;
    public $password;
    public $password_confirmation;
    public $roles;
    public $selectetRoleId;

    public function status_switch(User $user){
        $user->update(['status'=>$user->status? 0 : 1]);
        $this->alertSuccess(__('Saved'));
    }
    public function rules(){

        $editVaidate = [
            'userEdit.name'=>'required|min:3|max:20|unique:users,name,'.$this->userEdit->id,
            'userEdit.email'=>'required|email|min:3|max:50|unique:users,email,'.$this->userEdit->id,
            'userEdit.mobile'=>'required|unique:users,mobile,'.$this->userEdit->id,
        ];

        if($this->is_edit) return $editVaidate;
        return  [
            'password' => 'required|confirmed|min:6|max:10',
            'password_confirmation' => 'required|min:6|max:10',
            ...$editVaidate
        ];

    }

    function mount()
    {
        $this->paginate_list = OptionsController::PAGINATE_LIST;
        $this->paginate = ConstantController::LARGE_NUMBER_OF_PAGINATE;
        $this->userEdit = User::make();
        $this->roles = Role::all();
        $this->selectetRoleId = $this->userEdit?->roles?->first()?->id;
    }

    public function edit(User $user)
    {
        $this->dispatch('alert-show-model');
        $this->resetInputFields();
        $this->is_edit = true;
        $this->userEdit = $user;
        $this->show_modal = true;
        $this->selectetRoleId = $this->userEdit?->roles?->first()?->id;

    }

    function updated()
    {
        $this->dispatch('alert-show-model');
    }

    public function destroy(User $user)
    {
        $user->delete();
        $this->dispatch('alert-delete');

    }

    public function create()
    {
        $this->resetInputFields();
        $this->dispatch('alert-show-model');
        $this->is_edit = false;
        $this->show_modal = true;

    }

    private function resetInputFields(){
        $this->resetErrorBag();
        $this->userEdit = User::make();
        $this->selectetRoleId = '';
    }
    public function save()
    {

        $this->validate();
        if(!$this->is_edit){
            $this->userEdit->password = Hash::make($this->password);
        }
        $this->password = '';
        $this->password_confirmation = '';
        $this->userEdit->save();
        $this->userEdit->assignRole($this->selectetRoleId);
        $this->cancel();
        $this->alertSuccess(__('Saved'));
        $this->dispatch('alert-saved');
    }

    public function cancel()
    {
        $this->show_modal = false;

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
        return view('livewire.user.user', [
            'users'=> $this->search(),
        ]);
    }
}
