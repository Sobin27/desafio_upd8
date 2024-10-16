<?php

namespace App\Data\Client;

use App\Core\Repository\Client\IVerifyIfCpfAlreadyExistsRepository;
use App\Models\Client;

class VerifyIfCpfAlreadyExistsRepository implements IVerifyIfCpfAlreadyExistsRepository
{
    public function verifyIfCpfAlreadyExists(string $cpf): bool
    {
        return Client::query()->where('cpf', $cpf)->exists();
    }
}
