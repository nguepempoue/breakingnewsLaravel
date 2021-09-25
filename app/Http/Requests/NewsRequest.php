<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title'=>'required',
            'picture'=>'required',
            'desc'=>'required'
        ];
    }


    public function messages(){

        return[
            'title.required' => 'please enter the news title',
            'picture.required'=> 'please enter the news picture',
            'desc.required' => 'please enter the news description'
        ];
    }
}
