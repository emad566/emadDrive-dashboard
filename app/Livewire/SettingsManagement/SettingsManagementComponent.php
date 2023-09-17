<?php

namespace App\Livewire\SettingsManagement;

use App\Models\AppSettings as Model;
use App\Http\Traits\Toast;
use App\Http\Traits\WithTable;
use Livewire\Component;

class SettingsManagementComponent extends Component
{
    use Toast, WithTable;
    protected const MODEL = Model::class;
    public MODEL $currentItem;
    public function rules(){
        return [
            'currentItem.key'=>'required|max:50|unique:app_settings,key,'.$this->currentItem->id,
            'currentItem.value'=>'required|max:191',
            'currentItem.en_description'=>'nullable|max:191',
            'currentItem.ar_description'=>'nullable|max:191',
            'currentItem.en_label'=>'required|max:191',
            'currentItem.ar_label'=>'required|max:191',
            'currentItem.type'=>'required|max:191',
            'currentItem.roles'=>'required|max:191',
            'currentItem.status'=> 'nullable',
        ];
    }

    function search()
    {
        $result = MODEL::search('key', $this->search)
            ->orSearch('value', $this->search)
            ->orSearch('en_description', $this->search)
            ->orSearch('ar_description', $this->search)
            ->orSearch('en_label', $this->search)
            ->orSearch('ar_label', $this->search)
            ->orSearch('type', $this->search)
            ->orSearch('roles', $this->search)
            ->orderBy($this->sort_field, $this->sort_direction);
        return $this->paginate == 'all'? $result->get() : $result->paginate($this->paginate);
    }

    public function render()
    {
        return view('livewire.settings-management.settings-management-component', [
            'items' => $this->search(),
        ]);
    }
}
