<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CaptainVehicle extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $with = ['vehicleMedias'];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }


    public function captain()
    {
        return $this->belongsTo(Captain::class);
    }

    public function vehicleMedias()
    {
        return $this->hasMany(CaptainVehicleMedia::class);
    }

    public function color()
    {
        return $this->hasOne(Color::class, 'id', 'color_id');
    }

    public function brand()
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }

    public function carmodel()
    {
        return $this->hasOne(Brand::class, 'id', 'carmodel_id');
    }

}
