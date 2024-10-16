<?php
namespace App\Http\Requests\Client;

use App\Http\Requests\BaseRequest;

class ListClientRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
        ];
    }
}
