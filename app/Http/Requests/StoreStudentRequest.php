<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'sex' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'date', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'number' => ['required', 'int', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'sex.required' => 'O campo sexo é obrigatório',
            'birth_date.required' => 'O campo date de nascimento é obrigatório',
            'city.require' => 'O campo cidade é obrigatório',
            'birth_date.require' => 'O campo data de nascimento é obrigatório',
            'district.require' => 'O campo bairro é obrigatório',
            'strret.require' => 'O campo rua é obrigatório',
            'number.require' => 'O campo número é obrigatório',
            'number.integer' => 'Aceita somente números',
        ];
    }
}
