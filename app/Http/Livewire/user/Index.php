<?php

namespace App\Http\Livewire\user;
use App\Http\Controllers\General\OptionsController;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
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

    public $show_modal = false;
    public $is_edit = false;

    public User $userEdit;
    public $password;
    public $password_confirmation;

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
    }

    public function edit(user $user)
    {
        $this->resetInputFields();
        $this->is_edit = true;
        $this->userEdit = $user;
        $this->show_modal = true;
    }
    public function create()
    {
        $this->resetInputFields();
        $this->is_edit = false;
        $this->userEdit = User::make();
        $this->show_modal = true;
    }

    private function resetInputFields(){
        $this->resetErrorBag();
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
        $this->cancel();
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
        return view('livewire.user.index', [
            'users'=> $this->search()
        ]);
    }
}
