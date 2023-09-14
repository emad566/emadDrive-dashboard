<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AppSettings extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $table='app_settings';
    protected $guarded =[];
    public $timestamps = false;

    public $translatable = ['description', 'value', 'label'];

}
