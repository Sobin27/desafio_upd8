<?php
namespace App\Data\Client;

use App\Core\Repository\Client\IClientUpdateRepository;
use App\Models\Client;

class ClientUpdateRepository implements IClientUpdateRepository
{
    public function updateClient(Client $client): bool
    {
        return $client->save();
    }
}
