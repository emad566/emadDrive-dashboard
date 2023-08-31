<?php

namespace App\Livewire\Settings;

use App\Http\Traits\Toast;
use App\Models\AppSettings;
use Livewire\Component;

class SettingsComponent extends Component
{
    use Toast;

    public String $title;

    protected function rules() {
        return [
            'title' => 'required|min:3|max:70',
        ];
    }

    public function mount(): void
    {
        $this->title = AppSettings::where('key', 'title')->first()->value;
    }

    public function updatedTitle()
    {
        AppSettings::where('key', 'title')->first()->update(['value'=>$this->title]);
        $this->alertSuccess(__('Saved'));
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.settings.settings');
    }
}
