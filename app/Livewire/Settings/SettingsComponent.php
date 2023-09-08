<?php

namespace App\Livewire\Settings;

use App\Http\Traits\Toast;
use App\Models\AppSettings;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
class SettingsComponent extends Component
{
    use Toast;

    public function save(AppSettings $item, $value)
    {

    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.settings.settings');
    }
}
