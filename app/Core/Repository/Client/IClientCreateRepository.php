<?php
namespace App\Core\Repository\Client;

use App\Http\Requests\Client\CreateClientRequest;

interface IClientCreateRepository
{
    public function clientCreate(CreateClientRequest $request): bool;
}
