<?php

namespace App\Livewire\Captain;

use App\Http\Traits\Toast;
use Livewire\Component;

class VehicleImages extends Component
{
    use Toast;
    public $captain;
    public $vehicle;
    public $vehicle_front;
    public $vehicle_back;
    public $vehicle_left;
    public $vehicle_right;
    public $vehicle_front_seat;
    public $vehicle_back_seat;
    public $vehicle_license_front;
    public $vehicle_license_back;

    public function mount($captain)
    {
        $this->captain = $captain;
        $this->vehicle= $captain->vehicles->first();
        $this->vehicle_front = $this->vehicle->vehicle_front;
        $this->vehicle_back = $this->vehicle->vehicle_back;
        $this->vehicle_left = $this->vehicle->vehicle_left;
        $this->vehicle_right = $this->vehicle->vehicle_right;
        $this->vehicle_front_seat = $this->vehicle->vehicle_front_seat;
        $this->vehicle_back_seat = $this->vehicle->vehicle_back_seat;
        $this->vehicle_license_front = $this->vehicle->vehicle_license_front;
        $this->vehicle_license_back = $this->vehicle->vehicle_license_back;
    }

    public function save()
    {

        $this->dispatch('refresh-captain');
        $this->alertSuccess(__('Created Successfully.'));
    }

    public function activate()
    {
        $this->save();
        $this->vehicle->update(['status_image'=>1]);
    }

    public function render()
    {
        return view('livewire.captain.vehicle-images', [ 'captain'=>$this->captain ]);
    }
}
