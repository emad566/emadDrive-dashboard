<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Passenger;
use Livewire\WithPagination;

class PassengerController extends Controller
{
    public function __invoke()
    {
        return view('dashboard.passenger.index');
    }
}
