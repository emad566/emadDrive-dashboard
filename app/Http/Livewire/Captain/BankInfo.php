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
            'account_name' => ['required', 'min:4', 'max:25'],
            'iban_number' => ['required', 'regex:/[E]{1}[G]{1}[0-9]{22}/'],
            'account_number' => ['required', 'min:4',],
            'bank_name' => ['required_with:account_number', 'min:4'],
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
