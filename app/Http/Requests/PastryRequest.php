<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PastryRequest extends FormRequest
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
        $id = $this->segment('3');

        return [
            'name'      => "required|max:191|unique:pastries,name,{$id},id",
            'price'       => "required|regex:/^\d*(\.\d{2})?$/",
            'photo'     => "required|max:191",
        ];
    }
}
