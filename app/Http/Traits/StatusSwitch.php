<?php
namespace App\Http\Traits;

Trait StatusSwitch{
    public function getStatusSwitchAttribute(){
        return $this->status? 'checked="checked"' : '';
    }

    public function getStatusAttribute($value){
        return $value? true : false;
    }
}
