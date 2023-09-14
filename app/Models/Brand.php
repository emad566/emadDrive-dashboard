<?php

namespace App\Models;

use App\Http\Controllers\General\ConstantController;
use App\Http\Traits\StatusSwitch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory, StatusSwitch;
    protected $guarded = [];
    protected $table = 'brands';

    function getIconSrcAttribute(): string
    {
        $src = 'storage/'.$this->icon;
        return (file_exists(public_path($src)) && $this->icon)? asset($src) : asset(ConstantController::NO_IMAGE);
    }
}
