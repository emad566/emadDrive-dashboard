<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Passenger;
use Livewire\WithPagination;

class PassengerController extends Controller
{
    public function index()
    {
        return view('dashboard.passenger.index');
    }

    public function edit(Passenger $passenger)
    {
        return view('dashboard.passenger.edit', compact('passenger'));
    }
}
