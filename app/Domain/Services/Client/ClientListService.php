<?php
namespace App\Domain\Services\Client;

use App\Core\Repository\Client\IClientListRepository;
use App\Core\Service\Client\IClientListService;
use App\Core\Support\PaginatedList;
use App\Http\Requests\Client\ListClientRequest;

class ClientListService implements IClientListService
{
    public function __construct(
        private readonly IClientListRepository $clientListRepository
    )
    { }

    public function listClients(ListClientRequest $request): PaginatedList
    {
        return $this->clientListRepository->listClient($request->getPagination(), $request);
    }
}
