<?php

namespace App\Livewire\Captain;

use App\Http\Controllers\General\OptionsController;
use App\Http\Traits\Toast;
use App\Models\Brand;
use App\Models\Carmodel;
use App\Models\Color;
use Livewire\Component;

class VehicleInfo extends Component
{
    use Toast;
    public $captain;
    public $vehicle;
    public $registration_plate;
    public $brand_id;
    public $carmodel_id;
    public $color_id;
    public $model_date;

    public $brands;
    public $years;
    public $colors;
    public $carmodels;
    public $langName;

    public $vehicle_license_expire_date;


    public function mount($captain)
    {
        $this->langName = getLocal() . '_name';
        $this->captain = $captain;
        $this->vehicle= $captain->vehicles->first();

        $this->registration_plate = $this->vehicle->registration_plate;
        $this->brand_id = $this->vehicle->brand_id;
        $this->carmodel_id = $this->vehicle->carmodel_id;
        $this->color_id = $this->vehicle->color_id;
        $this->model_date = $this->vehicle->model_date;
        $this->vehicle_license_expire_date = $this->vehicle->vehicle_license_expire_date;

        $this->brands = Brand::select('id', $this->langName)->active()->orderBy($this->langName,'asc')->get();
        $this->selectCarmodels();
        $this->colors = Color::select('id', $this->langName)->active()->orderBy($this->langName,'asc')->get();
        $this->years = OptionsController::YEARS;;

    }

    public function selectCarmodels(){
        $this->carmodels = Carmodel::select('id', $this->langName)->where('brand_id', $this->brand_id)->active()->orderBy($this->langName,'asc')->get();
    }

    public function updatedBrandId(){
        $this->selectCarmodels();
        $this->carmodel_id='';
    }

    public function save()
    {
        $data = $this->validate([
            'registration_plate' => 'required|min:6|max:6|unique:captain_vehicles,registration_plate,'.$this->vehicle->id,
            'brand_id' => 'required|exists:brands,id',
            'carmodel_id' => 'required|exists:carmodels,id',
            'color_id' => 'required|exists:colors,id',
            'model_date' => 'required|max:4|min:4',
            'vehicle_license_expire_date' => 'required|date_format:Y-m-d|after:yesterday',
        ]);

        $this->vehicle->update($data);

        $this->dispatch('refresh-captain');
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
