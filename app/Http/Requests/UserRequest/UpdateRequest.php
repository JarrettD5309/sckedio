<?php

namespace App\Http\Requests\UserRequest;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::user())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'display_picture' => 'image|mimes:jpeg,jpg,png,gif|nullable|max:204800',
            'bio' => 'nullable|string',
            'social_medias' => 'nullable|array',
            'social_medias.*' => 'nullable|string',
            'social_links' => 'nullable|array',
            'social_links.*' => 'nullable|string|distinct:strict',
            'username' => 'nullable|string',
            'email' => 'nullable|string',
            'first_name' => 'nullable|string',
            'last_name' => 'nullable|string',
            'state' => 'nullable|string',
            'city' => 'nullable|string',
            'street' => 'nullable|string',
            'postal_code' => 'nullable|string',
            'country' => 'nullable|string',
            'manufacturer' => 'boolean',
            'designer' => 'boolean'
        ];
    }
}
