<?php
namespace App\Http\Requests\Client;

use App\Http\Requests\BaseRequest;

class UpdateClientRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'client_id' => 'required|exists:clients,id',
            'name' => 'string',
            'address' => 'string',
            'city' => 'exists:cities,id',
        ];
    }
}
