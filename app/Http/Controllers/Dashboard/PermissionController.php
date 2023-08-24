<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Livewire\WithPagination;

class PermissionController extends Controller
{
    public function __invoke()
    {
        return view('dashboard.permission.index');
    }
}
