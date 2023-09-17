<?php

namespace App\Models;

use App\Http\Traits\StatusSwitch;
use App\Http\Traits\WithLangHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AppSettings extends Model
{
    use HasFactory, StatusSwitch,WithLangHelper;


    protected $table='app_settings';
    protected $guarded =[];
    public $timestamps = false;


}
