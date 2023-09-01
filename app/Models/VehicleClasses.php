<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleClasses extends Model
{
    use HasFactory;
    protected $table='vehicle_classes';
    protected $guarded =[];

    public function getStatusSwitchAttribute(){
        return $this->status? 'checked="checked"' : '';
    }

    public function getStatusAttribute($value){
        return $value? true : false;
    }
}
