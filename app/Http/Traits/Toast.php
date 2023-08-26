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
        $this->dispatchBrowserEvent('alert',
            ['type' => 'success',  'message' => $message]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function alertError($message, $th=false)
    {
        $this->dispatchBrowserEvent('alert',
//            ['type' => 'error',  'message' => $message . (App::hasDebugModeEnabled() && $th != false)? ": line"."[".$th?->getLine()."]" : '']);
            ['type' => 'error',  'message' => $message]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function alertInfo($message)
    {
        $this->dispatchBrowserEvent('alert',
            ['type' => 'info',  'message' => $message]);
    }
}
