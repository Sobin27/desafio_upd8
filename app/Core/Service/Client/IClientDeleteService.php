<?php
namespace App\Core\Service\Client;

interface IClientDeleteService
{
    public function deleteClient(int $id): bool;
}
