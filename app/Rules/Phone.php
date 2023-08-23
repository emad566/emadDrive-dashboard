<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Phone implements Rule
{
    /**
     * Create a new role instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

   /**
     * Determine if the validation role passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^(01)(0|1|2|5|)([0-9]{8})$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('Mobile number wrong');
    }
}
