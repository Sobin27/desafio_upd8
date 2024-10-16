<?php
namespace App\Core\Repository\Representative;

interface IVerifyIfCpfAlreadyExistsRepository
{
    public function verifyIfCpfAlreadyExists(string $cpf): bool;
}
