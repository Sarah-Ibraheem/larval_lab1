<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            
                'title' => 'required|min:5',
                'user_id' => 'required',
                'description' =>'required|min:5'
            
        ];
    }

    public function messages()
    {
        return['title.min'=> 'iti say please insert at least 5 characters for title',
         'description.min'=> 'iti say please insert at least 5 characters for desc'];
    }
}
