<?php

namespace App\Http\Requests;

use App\Models\Roksana_Apu;
use Illuminate\Foundation\Http\FormRequest;

class CreateRoksana_ApuRequest extends FormRequest
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
        return Roksana_Apu::$rules;
    }
}
