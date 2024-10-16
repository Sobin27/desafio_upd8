<?php
namespace App\Core\Repository\Client;

use App\Models\Client;

interface IClientFindByIdRepository
{
    public function findById(int $id): Client;
}
