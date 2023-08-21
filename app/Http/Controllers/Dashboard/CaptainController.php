<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Captain;
use Livewire\WithPagination;

class CaptainController extends Controller
{
    public function index()
    {
        return view('dashboard.captain.index');
    }

    public function edit(Captain $captain)
    {
        return view('dashboard.captain.edit', compact('captain'));
    }
}
