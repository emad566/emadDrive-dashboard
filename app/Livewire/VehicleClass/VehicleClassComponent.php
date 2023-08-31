<?php

namespace App\Livewire\VehicleClass;

use App\Http\Controllers\General\ConstantController;
use App\Http\Controllers\General\OptionsController;
use App\Http\Traits\Toast;
use App\Models\VehicleClasses;
use Livewire\Component;
use Livewire\WithPagination;

class VehicleClassComponent extends Component
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

    public VehicleClasses $currentItem;

    public function status_switch(VehicleClasses $item){
        $item->update(['status'=>$item->status? 0 : 1]);
        $this->alertSuccess(__('Saved'));
    }

    public function rules(){
        return [
            'currentItem.name'=>'required|min:3|max:20|unique:vehicle_classes,name,'.$this->currentItem->id,
            'currentItem.description'=>'nullable|min:3|max:191',
            'currentItem.icon'=>'required|min:3|max:50',
            'currentItem.class'=>'required|min:3|max:50',
            'currentItem.base_fare'=>'required|regex:/^\d{1,13}(\.\d{1,4})?$/',
            'currentItem.distance'=>'required|regex:/^\d{1,13}(\.\d{1,4})?$/',
            'currentItem.wait'=>'required|numeric|min:0|max:3600',
            'currentItem.cost_small_destination'=>'required|regex:/^\d{1,13}(\.\d{1,4})?$/',
            'currentItem.cancel_value'=>'required|regex:/^\d{1,13}(\.\d{1,4})?$/',
            'currentItem.outside_town'=>'required|regex:/^\d{1,13}(\.\d{1,4})?$/',
            'currentItem.add_value'=>'required|regex:/^\d{1,13}(\.\d{1,4})?$/',
            'currentItem.status'=> 'nullable',
        ];
    }

    function mount()
    {
        $this->paginate_list = OptionsController::PAGINATE_LIST;
        $this->paginate = ConstantController::LARGE_NUMBER_OF_PAGINATE;
        $this->resetInputFields();
    }

    public function edit(VehicleClasses $item)
    {
        $this->resetInputFields();
        $this->is_edit = true;
        $this->currentItem = $item;
        $this->show_modal = true;
    }

    public function destroy(VehicleClasses $item)
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
        $this->currentItem = VehicleClasses::make();
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
        $result = VehicleClasses::search('name', $this->search)
            ->orderBy($this->sort_field, $this->sort_direction);
        return $this->paginate == 'all'? $result->get() : $result->paginate($this->paginate);
    }

    public function render()
    {
        return view('livewire.vehicle-class.vehicle-class-component', [
            'items'=> $this->search(),
        ]);
    }
}
