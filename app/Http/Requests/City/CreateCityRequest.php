<?php
namespace App\Http\Requests\City;

use App\Http\Requests\BaseRequest;

class CreateCityRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
        ];
    }
}
