<?php

namespace App\Livewire\Color;

use App\Models\Color as Model;
use App\Http\Traits\Toast;
use App\Http\Traits\WithTable;
use Livewire\Component;

class ColorComponent extends Component
{
    use Toast, WithTable;
    protected const MODEL = Model::class;
    public MODEL $currentItem;
    public function rules(){
        return [
            'currentItem.ar_name'=>'required|min:3|max:20|unique:colors,ar_name,'.$this->currentItem->id,
            'currentItem.en_name'=>'required|min:3|max:20|unique:colors,en_name,'.$this->currentItem->id,
            'currentItem.code'=>'required|min:7|max:7',
            'currentItem.status'=> 'nullable',
        ];
    }

    function search()
    {
        $result = MODEL::search('ar_name', $this->search)
            ->orSearch('en_name', $this->search)
            ->orSearch('code', $this->search)
            ->orderBy($this->sort_field, $this->sort_direction);
        return $this->paginate == 'all'? $result->get() : $result->paginate($this->paginate);
    }

    public function render()
    {
        return view('livewire.color.color-component', [
            'items' => $this->search(),
        ]);
    }
}
