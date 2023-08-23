<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Livewire\WithPagination;

class RoleController extends Controller
{
    public function __invoke()
    {
        return view('dashboard.role.index');
    }
}
