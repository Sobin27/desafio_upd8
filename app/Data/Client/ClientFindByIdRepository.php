<?php
namespace App\Data\Client;

use App\Core\Repository\Client\IClientFindByIdRepository;
use App\Models\Client;

class ClientFindByIdRepository implements IClientFindByIdRepository
{
    public function findById(int $id): Client
    {
        return Client::query()->find($id);
    }
}
