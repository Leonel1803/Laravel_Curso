<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostmFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //Por el momento lo dejamos en true ya que no hay alguna politica para no permitir que un usuario llene el formulario
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if($this->isMethod("PATCH")){ //Haz esta validación si es que el request es mandado como PATCH
            return [
                'title' => ['required', 'min:4'], //Aquí está indicando title debe tener mínimo 4 caracteres
                'body' => ['required']
            ];
        }
        return [
            'title' => ['required'], //Aquí está indicando que no se puede pasar la variable 'title' sin ningún contenido
            'body' => ['required']
        ];
    }
}
