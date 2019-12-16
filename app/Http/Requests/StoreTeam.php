<?php

namespace App\Http\Requests;

use App\Rules\ValidShowdownExport;
use Illuminate\Foundation\Http\FormRequest;

class StoreTeam extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'teamName' => 'required|string',
            'format' => 'required',
            'rentalCode' => 'nullable|alpha_dash',
            'description' => 'nullable|string',
            'importTeam' => [
                    'required', new ValidShowdownExport
                ]
        ];
    }
}
