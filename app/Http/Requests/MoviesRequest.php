<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoviesRequest extends FormRequest
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
            'title' => 'required|string',
            'director' => 'required|string',
            'duration' => 'required|intger|max:500',
            'imageUrl' => 'required|string|url|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',

        ];
    }
}
