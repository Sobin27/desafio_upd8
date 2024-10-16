<?php
namespace App\Http\Requests\Client;

use App\Http\Requests\BaseRequest;

class CreateClientRequest extends BaseRequest
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
            'birth_date' => 'required|date',
            'sex' => 'required|string',
            'address' => 'required|string',
            'city_id' => 'required|integer|exists:cities,id'
        ];
    }
}
