<?php
namespace App\Core\Service\Client;

use App\Http\Requests\Client\CreateClientRequest;

interface IClientCreateService
{
    public function createClient(CreateClientRequest $request): bool;
}
