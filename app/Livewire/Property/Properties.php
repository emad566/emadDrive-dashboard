<?php

namespace App\Livewire\Property;

use App\Http\Controllers\General\ConstantController;
use App\Http\Controllers\General\OptionsController;
use App\Http\Traits\Toast;
use App\Models\Property;
use Livewire\Component;
use Livewire\WithPagination;

class Properties extends Component
{
    use WithPagination, Toast;

    public string $search = '';
    public string $sort_field = 'title';
    public string $sort_direction = 'desc';
    protected $queryString = ['sort_field', 'sort_direction'];
    public $paginate;

    public $paginate_list = [];

    public $show_modal = false;
    public $is_edit = false;

    public Property $currentItem;

    public function status_switch(Property $property){
        $property->update(['status'=>$property->status? 0 : 1]);
        $this->alertSuccess(__('Saved'));
    }

    public function rules(){
        return [
            'currentItem.title'=>'required|min:3|max:20|unique:properties,title,'.$this->currentItem->id,
            'currentItem.icon'=>'required|min:3|max:50',
            'currentItem.status'=> 'nullable',
        ];
    }

    function mount()
    {
        $this->paginate_list = OptionsController::PAGINATE_LIST;
        $this->paginate = ConstantController::LARGE_NUMBER_OF_PAGINATE;
        $this->resetInputFields();
    }

    public function edit(Property $item)
    {
        $this->resetInputFields();
        $this->is_edit = true;
        $this->currentItem = $item;
        $this->show_modal = true;
    }

    public function destroy(Property $item)
    {
        $item->delete();
        $this->dispatch('alert-delete');

    }

    public function create()
    {
        $this->resetInputFields();
        $this->is_edit = false;
        $this->show_modal = true;

    }

    private function resetInputFields(){
        $this->currentItem = Property::make();
        $this->resetErrorBag();
    }

    public function save()
    {
        $this->validate();
        $this->currentItem->save();
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
        $result = Property::search('title', $this->search)
            ->orderBy($this->sort_field, $this->sort_direction);
        return $this->paginate == 'all'? $result->get() : $result->paginate($this->paginate);
    }

    public function render()
    {
        return view('livewire.property.properties', [
            'items'=> $this->search(),
        ]);
    }

}
