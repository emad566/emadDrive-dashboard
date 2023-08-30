<?php
namespace App\Http\Traits;
use Illuminate\Support\Facades\App;

Trait Toast{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function alertSuccess($message)
    {
        $this->dispatch('alert', type: 'success',  message: $message);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function alertError($message, $th=false)
    {
        $this->dispatch('alert', type: 'error',  message: $message);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function alertInfo($message)
    {
        $this->dispatch('alert', type: 'info',  message: $message);
    }
}
