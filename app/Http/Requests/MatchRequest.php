<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatchRequest extends FormRequest
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
            'match_date' => 'required|date',
            'local' => 'required|different:visitor',
            'visitor' => 'required|different:local',
            'status' => 'required|in:in progress,played,canceled',
            'result' => 'required|in:local,visitor,draw,not played yet',
        ];
    }
}


