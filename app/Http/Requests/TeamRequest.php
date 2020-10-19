<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'name'          => 'required | string', 
            'description'   => 'nullable | string',
            'faculty'       => 'required | string', 
            'facebook'      => 'nullable | string',
            'google'        => 'nullable | string',
            'twitter'       => 'nullable | string',
            'linkedin'      => 'nullable | string',
            'dribble'       => 'nullable | string',
            'instagram'     => 'nullable | string'
        ];
    }
}
