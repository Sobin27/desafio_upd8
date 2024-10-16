<?php
namespace App\Core\Repository\Client;

interface IVerifyIfCpfAlreadyExistsRepository
{
    public function verifyIfCpfAlreadyExists(string $cpf): bool;
}
