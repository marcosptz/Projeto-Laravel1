<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassSchoolRequest extends FormRequest
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
            'description' => ['required', 'string', 'max:255'],
            'vacancies' => ['required', 'integer', 'max:255'],
            'teacher' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'O campo decrição é obrigatório',
            'vacancies.required' => 'O campo número de vagas é obrigatório',
            'vacancies.integer' => 'Aceita somente números',
            'teacher.required' => 'O campo professor é obrigatório',
        ];
    }
}
