<?php

namespace App\Livewire\VehicleClass;

use App\Http\Controllers\General\ConstantController;
use App\Http\Controllers\General\OptionsController;
use App\Http\Traits\StatusSwitch;
use App\Http\Traits\Toast;
use App\Http\Traits\WithTable;
use App\Models\VehicleClasses as Model;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class VehicleClassComponent extends Component
{
    use Toast, WithFileUploads, StatusSwitch, WithTable, WithPagination;
    protected const MODEL = Model::class;
    public Model $currentItem;
    public $newIcon;
    public $newIconName;

    public function rules(){
        return [
            'currentItem.ar_name'=>'required|min:3|max:20|unique:vehicle_classes,ar_name,'.$this->currentItem->id,
            'currentItem.en_name'=>'required|min:3|max:20|unique:vehicle_classes,en_name,'.$this->currentItem->id,
            'currentItem.ar_description'=>'nullable|min:3|max:191',
            'currentItem.en_description'=>'nullable|min:3|max:191',
            'currentItem.icon'=>'required|min:3|max:191',
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


    public function updatedNewIcon(){
        $this->validate([
            'newIcon' => 'image|max:512'
        ]);
        $this->newIconName = uploadToStorage($this->newIcon, 'properties');
        $this->currentItem->icon = $this->newIconName;
    }

    public function edit(Model $item)
    {
        $this->newIconName = '';
        $this->newIcon = '';
        $this->resetInputFields();
        $this->is_edit = true;
        $this->currentItem = $item;
        $this->show_modal = true;
    }


    public function create()
    {
        $this->newIconName = '';
        $this->newIcon = '';
        $this->resetInputFields();
        $this->is_edit = false;
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


    function search()
    {
        $result = Model::search('ar_name', $this->search)
            ->orSearch('en_name', $this->search)
            ->orSearch('ar_description', $this->search)
            ->orSearch('en_description', $this->search)
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
