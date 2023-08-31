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

    public function save(AppSettings $item, $value)
    {

        $validator = Validator::make([$item->key=>$value], [$item->key => $item->roles]);
        if ($validator->fails())  {
            $validator->validate();
        }

        if($value != $item->value) {
            $item->update(['value'=> $value]);
            $this->alertSuccess(__('Saved') . ' : ' . __($item->key));
        }

    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.settings.settings', ['items'=> AppSettings::where('status', 1)->orderBy('id', 'ASC')->get()]);
    }
}
