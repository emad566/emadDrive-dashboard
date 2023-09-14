<?php

namespace App\Livewire\Property;

use App\Http\Controllers\General\ConstantController;
use App\Http\Controllers\General\OptionsController;
use App\Http\Traits\Toast;
use App\Http\Traits\WithTable;
use App\Models\Property;
use App\Models\Property as Model;
use Livewire\Component;
use Livewire\WithFileUploads;

class Properties extends Component
{
    use Toast, WithFileUploads, WithTable;
    protected const MODEL = Model::class;
    public Property $currentItem;
    public $newIcon;
    public $newIconName;
    public function rules(){
        return [
            'currentItem.ar_title'=>'required|min:3|max:20|unique:properties,ar_title,'.$this->currentItem->id,
            'currentItem.en_title'=>'required|min:3|max:20|unique:properties,en_title,'.$this->currentItem->id,
            'currentItem.icon'=>'required|min:3|max:191',
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

    function create()
    {
        $this->newIcon = '';
        $this->resetInputFields();
        $this->is_edit = false;
        $this->show_modal = true;
    }

    public function edit(Property $item)
    {
        $this->newIconName = '';
        $this->newIcon = '';
        $this->resetInputFields();
        $this->is_edit = true;
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


    function search()
    {
        $result = MODEL::search('ar_title', $this->search)
            ->orSearch('en_title', $this->search)
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
