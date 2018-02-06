<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyCreateRequest extends FormRequest
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

  

    public function rules()
    {
        return [
            'name'=>'required|string|max:255',
            'address'=>'required|string|max:255',
            'number'=>'string|max:100',
            'email'=>'string|max:255',
            'contact_person'=>'string|max:255',
            'pib'=>'max:11'
        ];
    }
}
