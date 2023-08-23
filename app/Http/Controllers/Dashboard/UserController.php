<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Livewire\WithPagination;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.user.index');
    }
}
