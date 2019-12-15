<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidShowdownExport implements Rule
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
		$pattern = '/([^@]+\s@\s[\w\s]+)(\s*\n|\n)(Ability:\s\w+\s*\w*)\2(Level:\s\d{1,3}\2){0,1}(EVs:\s[\w\s]+(\/[\w\s]+){1,5}\2)(\w+\sNature\2)(IVs:\s[\w\s]+(\/[\w\s]+){0,5}\2){0,1}(-\s[\w\-\s]+){4}/';
		$valid = 0;
		$aData = preg_split('/\n\n/', trim($data));

		foreach($aData as $data) {
			if(preg_match($pattern, $data)) {
				$valid++;
			} else {

			}
		}

		return $valid === 6; // require 6 valid Pokemon.
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Something in the team is wrong. Please make sure to copy/paste the export exactly.';
    }
}
