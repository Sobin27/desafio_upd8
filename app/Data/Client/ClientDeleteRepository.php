<?php
namespace App\Data\Client;

use App\Core\Repository\Client\IClientDeleteRepository;
use App\Models\Client;

class ClientDeleteRepository implements IClientDeleteRepository
{
    public function deleteClient(int $id): bool
    {
        return Client::query()->find($id)->delete();
    }
}
