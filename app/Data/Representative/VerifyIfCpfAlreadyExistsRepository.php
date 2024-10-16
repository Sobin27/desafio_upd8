<?php
namespace App\Data\Representative;

use App\Core\Repository\Representative\IVerifyIfCpfAlreadyExistsRepository;
use App\Models\Representative;

class VerifyIfCpfAlreadyExistsRepository implements IVerifyIfCpfAlreadyExistsRepository
{
    public function verifyIfCpfAlreadyExists(string $cpf): bool
    {
        return Representative::query()->where('cpf', $cpf)->exists();
    }
}
