<?php
namespace App\Http\Traits;

use App\Http\Controllers\General\ConstantController;
use App\Http\Controllers\General\OptionsController;
use Livewire\WithPagination;

Trait WithLangHelper{
    public function getLangKey($key): string
    {
        $key = getLangKey($key);
        return  $this->$key;
    }
}
