<?php

namespace App\Models;

use Spatie\Permission\Models\Permission as basePermission;

class Permission extends basePermission
{
    public function childes(){
        return $this->hasMany(Permission::class, 'parent_id', 'id');
    }

    public function parent(){
        return $this->hasOne(Permission::class, 'id', 'parent_id');
    }
}

