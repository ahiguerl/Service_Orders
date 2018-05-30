<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterClientRequest extends FormRequest
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
  public function rules(){
    return [
      'id' => 'required|max:100|unique:clients',
      'name' => 'required|string|max:100',
      'address' => 'required|string|max:200',
      'city' => 'required|integer|max:11',
      'cellphone' => 'required|string|max:10',
      'phone' => 'required|string|max:7',
      'contact_name' => 'nullable|string|max:255',
      'extension_number' => 'nullable|max:5',
      'email' => 'required|string|email|max:60|unique:clients',
    ];
  }

  public function messages(){
    return [
      'name.required' => 'El nombre o razón social es requerido',
      'name.max' => 'La longitud del nombre no debe exceder los 100',
      'address.required' => 'La dirección es requerida',
    ];
  }
}
