<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'bookName' => 'required'
        ];
    }

    /**
     * return request's related messages
     * @return array
     */
    public function messages()
    {
        return [
            'bookName.required' => 'ایمیل الزامی می باشد'
        ];
    }
}
