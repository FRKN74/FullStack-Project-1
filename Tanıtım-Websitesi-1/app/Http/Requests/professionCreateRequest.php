<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class professionCreateRequest extends FormRequest
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
            'fullname' => 'required|min:3',
            'profession'=>'required|min:3',
            'job' => 'required|min:3',
            'image' => 'required|mimes:png,jpg',
        ];
    }
    public function attributes()
    {
        return [
            'fullname' => 'Ad soyad',
            'profession'=>'Meslek',
            'job' => 'Meslek Dalı',
            'image' => 'Fotoğraf',
        ];
    }
}
