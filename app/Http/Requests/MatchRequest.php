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
            'date' => 'required|date',
            'local_teams' => 'required|different:visitor_teams',
            'visitor_teams' => 'required|different:local_teams',
            'status' => 'required|in:in process,played,cancelled',
            'result' => 'required|in:local,visitor,draw,not played yet',
        ];
    }
}


