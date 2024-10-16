<?php
namespace App\Core\Service\Client;

use App\Http\Requests\Client\UpdateClientRequest;

interface IClientUpdateService
{
    public function updateClient(UpdateClientRequest $request): bool;
}
