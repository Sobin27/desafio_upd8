<?php
namespace App\Core\Service\Client;

use App\Core\Support\PaginatedList;
use App\Http\Requests\Client\ListClientRequest;

interface IClientListService
{
    public function listClients(ListClientRequest $request): PaginatedList;
}
