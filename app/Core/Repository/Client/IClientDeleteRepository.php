<?php
namespace App\Core\Repository\Client;

interface IClientDeleteRepository
{
    public function deleteClient(int $id): bool;
}
