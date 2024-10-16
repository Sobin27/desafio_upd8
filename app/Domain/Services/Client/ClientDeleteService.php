<?php
namespace App\Domain\Services\Client;

use App\Core\Repository\Client\IClientDeleteRepository;
use App\Core\Service\Client\IClientDeleteService;

class ClientDeleteService implements IClientDeleteService
{
    public function __construct(
        private readonly IClientDeleteRepository $clientDeleteRepository,
    )
    { }

    public function deleteClient(int $id): bool
    {
        return $this->clientDeleteRepository->deleteClient($id);
    }
}
