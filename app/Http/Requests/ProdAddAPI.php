<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdAddAPI extends FormRequest
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
            'nom'=>'bail|required|between:5,20|alpha',
            'description'=>'bail|required|alpha',
            'prix'=>'bail|required|numeric',
            'photo'=>'bail|required',
            'taille'=>'bail|required',
            'categorie'=>'bail|required|alpha',
            'detail'=>'bail|required'
        ];
    }
}
