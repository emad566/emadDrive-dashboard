<?php

namespace App\Http\Livewire\Captain;

use App\Http\Traits\Toast;
use Livewire\Component;

class BankInfo extends Component
{
    use Toast;
    public $captain;
    public $bank;
    public $bank_name;
    public $iban_number;
    public $account_name;
    public $account_number;

    public function mount($captain)
    {
        $this->captain = $captain;
        $this->bank = $captain->bankAccounts->first();
        if($this->bank){
            $this->bank_name = $this->bank->bank_name;
            $this->iban_number = $this->bank->iban_number;
            $this->account_name = $this->bank->account_name;
            $this->account_number = $this->bank->account_number;
        }

    }

    public function save()
    {
        $data = $this->validate([
            'bank_name' => 'required|min:4|max:191',
            'iban_number' => 'required|min:20|max:191',
            'account_name' => 'required|min:4|max:191',
            'account_number' => 'required|min:20|max:191',
        ]);

        if($this->bank){
            $this->bank->update($data);
        }


        $this->emit('refresh-captain');
        $this->alertSuccess(__('Created Successfully.'));
    }

    public function activate()
    {
        $this->save();
        $this->bank->update(['status'=>1]);
    }

    public function render()
    {
        return view('livewire.captain.bank-info', [ 'captain'=>$this->captain ]);
    }
}
