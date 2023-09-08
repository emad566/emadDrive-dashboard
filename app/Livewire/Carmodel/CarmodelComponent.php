<?php

namespace App\Livewire\Carmodel;

use App\Http\Controllers\General\ConstantController;
use App\Http\Controllers\General\OptionsController;
use App\Models\Brand;
use App\Models\Carmodel as Model;
use App\Http\Traits\Toast;
use App\Http\Traits\WithTable;
use Livewire\Component;

class CarmodelComponent extends Component
{
    use Toast, WithTable;
    protected const MODEL = Model::class;
    public MODEL $currentItem;
    public $brands;
    public  $langName;

    public function rules(){
        return [
            'currentItem.ar_name'=>'required|min:3|max:20|unique:carmodels,ar_name,'.$this->currentItem->id,
            'currentItem.en_name'=>'required|min:3|max:20|unique:carmodels,en_name,'.$this->currentItem->id,
            'currentItem.brand_id'=>'required|exists:brands,id',
            'currentItem.status'=> 'nullable',
        ];
    }

    public function updatedCurrentItemBrandId()
    {
        $this->alertInfo("ok");
    }
    function mount()
    {
        $this->langName = getLocal() . '_name';
        $this->paginate_list = OptionsController::PAGINATE_LIST;
        $this->paginate = ConstantController::LARGE_NUMBER_OF_PAGINATE;
        $this->resetInputFields();
        $this->brands = Brand::active()->orderBy($this->langName, 'asc')->get();
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
        return view('livewire.carmodel.carmodel-component', [
            'items' => $this->search(),
        ]);
    }
}
