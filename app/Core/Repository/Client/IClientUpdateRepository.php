<?php
namespace App\Core\Repository\Client;

use App\Models\Client;

interface IClientUpdateRepository
{
    public function updateClient(Client $client): bool;
}
