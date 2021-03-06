<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Today_scheduleRequest extends FormRequest
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
            //
            'today_schedule.title' => 'required|string|max:15',
            'today_schedule.content' => 'required|string|max:4000',
        ];
    }
}
