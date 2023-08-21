<?php

namespace App\Http\Livewire\Captain;

use App\Http\Traits\Toast;
use App\Models\Captain;
use App\Rules\Phone;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditBasicInfo extends Component
{
    use Toast;
    public $captain;
    public $full_name;
    public $mobile;
    public $email;
    public $gender;
    public $birthday;
    public $national_expiry_date;
    public $license_expiry_date;

    function mount($captain)
    {
        $this->captain = $captain;
        $this->full_name = $captain->full_name;
        $this->mobile = $captain->mobile;
        $this->email = $captain->email;
        $this->gender = $captain->gender;
        $this->birthday = $captain->birthday;
        $this->national_expiry_date = $captain->national_expiry_date;
        $this->license_expiry_date = $captain->license_expiry_date;
    }

    function save()
    {
        $data = $this->validate([
            'full_name' => 'required|min:3|max:50',
            'mobile' => ['required',new Phone(), 'unique:captains,mobile,'.$this->captain->id],
            'email' => 'nullable',
            'gender' => [Rule::in('male', 'female')],
            'birthday' => 'required|date_format:Y-m-d|before:yesterday',
            'national_expiry_date' => 'required|date_format:Y-m-d|after:yesterday',
            'license_expiry_date' => 'required|date_format:Y-m-d|after:yesterday',
        ]);

        $this->captain->update([
            'full_name' => $this->full_name,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'gender' => $this->gender,
            'birthday' => $this->birthday,
            'national_expiry_date' => $this->national_expiry_date,
            'license_expiry_date' => $this->license_expiry_date,
        ]);
        $this->emit('refresh-captain');
        $this->alertSuccess(__('Created Successfully.'));
    }

    public function activate()
    {
        $this->save();
        $this->captain->update([
            'status' => $this->captain->vehicles->first()? 2 : 1,
        ]);
    }

    public function render()
    {
        return view('livewire.captain.edit-basic-info',[
            'captain' => $this->captain
        ]);
    }
}
