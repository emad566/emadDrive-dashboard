<?php

namespace App\Livewire\Brand;

use App\Http\Traits\Toast;
use App\Http\Traits\WithTable;
use App\Models\Brand as Model;
use Livewire\Component;
use Livewire\WithFileUploads;

class BrandComponent extends Component
{
    use Toast, WithFileUploads, WithTable;
    protected const MODEL = Model::class;
    public Model $currentItem;
    public $newIcon;
    public $newIconName;
    public function rules(){
        return [
            'currentItem.ar_name'=>'required|min:3|max:20|unique:brands,ar_name,'.$this->currentItem->id,
            'currentItem.en_name'=>'required|min:3|max:20|unique:brands,en_name,'.$this->currentItem->id,
            'currentItem.icon'=>'required|min:3|max:191',
            'currentItem.status'=> 'nullable',
        ];
    }


    public function updatedNewIcon(){
        $this->validate([
            'newIcon' => 'image|max:512'
        ]);
        $this->newIconName = uploadToStorage($this->newIcon, 'brands');
        $this->currentItem->icon = $this->newIconName;
    }

    function create()
    {
        $this->newIcon = '';
        $this->resetInputFields();
        $this->is_edit = false;
        $this->show_modal = true;
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
        $result = MODEL::search('ar_name', $this->search)
            ->orSearch('en_name', $this->search)
            ->orderBy($this->sort_field, $this->sort_direction);
        return $this->paginate == 'all'? $result->get() : $result->paginate($this->paginate);
    }

    public function render()
    {
        return view('livewire.brand.brand-component', [
            'items'=> $this->search(),
            'langName' => getLocal() . '_name'
        ]);
    }
}
