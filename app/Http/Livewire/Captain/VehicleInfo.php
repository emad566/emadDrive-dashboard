<?php

namespace App\Http\Livewire\Captain;

use App\Http\Traits\Toast;
use Livewire\Component;

class VehicleInfo extends Component
{
    use Toast;
    public $captain;
    public $vehicle;
    public $registration_plate;
    public $brand;
    public $model;
    public $color;
    public $model_date;
    public function mount($captain)
    {
        $this->captain = $captain;
        $this->vehicle= $captain->vehicles->first();

        $this->registration_plate = $this->vehicle->registration_plate;
        $this->brand = $this->vehicle->brand;
        $this->model = $this->vehicle->model;
        $this->color = $this->vehicle->color;
        $this->model_date = $this->vehicle->model_date;
        $this->vehicle_license_expire_date = $this->vehicle->vehicle_license_expire_date;
    }

    public function save()
    {
        $data = $this->validate([
            'registration_plate' => 'required|min:6|max:6|unique:captain_vehicles,registration_plate,'.$this->vehicle->id,
            'brand' => 'required|max:20|min:2',
            'model' => 'required|max:20|min:2',
            'color' => 'required|max:10|min:3',
            'model_date' => 'required|max:4|min:4',
            'vehicle_license_expire_date' => 'required|date_format:Y-m-d|after:yesterday',
        ]);

        $this->vehicle->update($data);

        $this->emit('refresh-captain');
        $this->alertSuccess(__('Created Successfully.'));
    }

    public function activate()
    {
        $this->save();
        $this->vehicle->update(['status'=>1]);
    }

    public function render()
    {
        return view('livewire.captain.vehicle-info', [ 'captain'=>$this->captain ]);
    }
}
