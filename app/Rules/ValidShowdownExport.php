<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidShowdownExport implements Rule
{

    private $NUM_VALID_POKEMON = 6;
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
		$pattern = '/(([\w\s()]+\s@\s[\w\s]+\n){1}(Ability:\s[\w\s]+\n){1}(Level:\s[\w\s]+\n){0,1}(Shiny:\s[\w\s]+\n){0,1}(Happiness:\s[\w\s]+\n){0,1}(EVs:[\w\s\/]+\n)([\w\sNature]+\n){1}(IVs:[\w\s\/]+\n){0,1}(-\s[\w\s\-]+))/';
		$valid = 0;
		$aData = preg_split('/\r\n\r\n/', trim($value));
        
		foreach($aData as $data) {
			if(preg_match($pattern, $data)) {
				$valid += 1;
			} 
        }
        
		return $valid === $this->NUM_VALID_POKEMON;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Something in the team is wrong. Please make sure to copy/paste the export exactly and include EVs. Nicknames are also not supported at the moment.';
    }
}
