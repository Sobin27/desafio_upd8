<?php
namespace App\Http\Requests\Representative;

use App\Http\Requests\BaseRequest;

class CreateRepresentativeRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'cpf' => 'required|string',
            'phone' => 'required|string',
            'city' => 'required|integer|exists:cities,id'
        ];
    }
}
