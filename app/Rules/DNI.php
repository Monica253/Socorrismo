<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DNI implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return ($this->isValidNif($value) || $this->isValidNie($value));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El campo DNI no es un DNi válido';
    }
	
	public function isValidNif($nif)
	{
	  $nifRegEx = '/^[0-9]{8}[A-Z]$/i';
	  $letras = "TRWAGMYFPDXBNJZSQVHLCKE";

	  if (preg_match($nifRegEx, $nif)) {
		 return ($letras[(substr($nif, 0, 8) % 23)] == $nif[8]);
	  }

      return false;
   	}

   	public function isValidNie($nif)
   	{
      $nieRegEx = '/^[KLMXYZ][0-9]{7}[A-Z]$/i';
      $letras = "TRWAGMYFPDXBNJZSQVHLCKE";

      if (preg_match($nieRegEx, $nif)) {

         $r = str_replace(['X', 'Y', 'Z'], [0, 1, 2], $nif);

         return ($letras[(substr($r, 0, 8) % 23)] == $nif[8]);
      }

      return false;
   	}
}

//https://generadordni.es/#dni
