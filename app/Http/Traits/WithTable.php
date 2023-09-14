<?php
namespace App\Http\Traits;

use App\Http\Controllers\General\ConstantController;
use App\Http\Controllers\General\OptionsController;
use Livewire\WithPagination;

Trait WithTable{
    use WithPagination, Toast;
    public string $search = '';
    public string $sort_field = 'id';
    public string $sort_direction = 'desc';
    protected $queryString = ['sort_field', 'sort_direction'];
    public $paginate;

    public $paginate_list = [];

    public $show_modal = false;
    public $is_edit = false;

    function mount()
    {
        $this->paginate_list = OptionsController::PAGINATE_LIST;
        $this->paginate = ConstantController::LARGE_NUMBER_OF_PAGINATE;
        $this->resetInputFields();
    }

    public function status_switch($item, $name='status'){
        $item = $this::MODEL::find($item);
        $item->update([$name => $item->$name? 0 : 1]);
        $this->alertSuccess(__('Saved'));
    }

    public function create()
    {
        $this->resetInputFields();
        $this->is_edit = false;
        $this->show_modal = true;
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

    public function cancel()
    {
        $this->show_modal = false;
    }
    public function destroy($item)
    {
        $item = $this::MODEL::find($item);
        $item->delete();
        $this->dispatch('alert-delete');
    }

    private function resetInputFields(){
        $this->currentItem =$this::MODEL::make();
        $this->resetErrorBag();
    }

    public function edit($item)
    {
        $this->resetInputFields();
        $this->is_edit = true;
        $item = $this::MODEL::find($item);
        $this->currentItem = $item;
        $this->show_modal = true;
    }

    public function save()
    {

        $this->validate();
        $this->currentItem->save();
        $this->cancel();
        $this->alertSuccess(__('Saved'));
        $this->dispatch('alert-saved');
    }
}
