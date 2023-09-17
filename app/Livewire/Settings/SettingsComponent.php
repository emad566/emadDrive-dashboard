<?php

namespace App\Livewire\Settings;

use App\Http\Traits\Toast;
use App\Models\AppSettings;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
#[AllowDynamicProperties]
class SettingsComponent extends Component
{
    use Toast;
    public $items;
    public function mount(){
        $this->items = AppSettings::where('status', 1)->orderBy('id', 'ASC')->get();
    }

    public function save($items)
    {
        $values = [];
        $rules = [];
        foreach ($this->items as $item){
            $values[$item->key] = $items[$item->id];
            $rules[$item->key] = $item->roles;

        }
        $validator = Validator::make($values, $rules);
        if ($validator->fails())  {
            $validator->validate();
        }

        foreach ($this->items as $item){
            $item->update(['value'=>$items[$item->id]]);
        }
        $this->alertSuccess(__('Saved'));

//
//        if($value != $item->value) {
//            $item->update(['value'=> $value]);
//            $this->alertSuccess(__('Saved') . ' : ' . __($item->key));
//        }

    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.settings.settings');
    }
}
