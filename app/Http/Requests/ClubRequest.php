<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClubRequest extends FormRequest
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
            'name' => 'required|min:3',
            'shield' => 'bail|nullable|url|max:255|mimeurl:image/jpeg,image/bmp,image/png,image/gif,image/svg+xml,image/webp',
            'foundation_date' => 'required|date'
        ];
    }
}
