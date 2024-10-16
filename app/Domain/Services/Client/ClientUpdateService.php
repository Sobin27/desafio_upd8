<?php
namespace App\Domain\Services\Client;

use App\Core\Repository\Client\IClientFindByIdRepository;
use App\Core\Repository\Client\IClientUpdateRepository;
use App\Core\Service\Client\IClientUpdateService;
use App\Http\Requests\Client\UpdateClientRequest;
use App\Models\Client;

class ClientUpdateService implements IClientUpdateService
{
    private UpdateClientRequest $request;
    private Client $client;

    public function __construct(
        private readonly IClientFindByIdRepository $clientFindByIdRepository,
        private readonly IClientUpdateRepository $clientUpdateRepository
    )
    { }

    public function updateClient(UpdateClientRequest $request): bool
    {
        $this->setRequest($request);
        $this->setClient();
        $this->mappedClient();
        return $this->clientUpdateRepository->updateClient($this->client);
    }
    private function setRequest(UpdateClientRequest $request): void
    {
        $this->request = $request;
    }
    private function setClient(): void
    {
        $this->client = $this->clientFindByIdRepository->findById($this->request->client_id);
    }
    private function mappedClient(): void
    {
        $this->client->name = $this->request->name ?? $this->client->name;
        $this->client->address = $this->request->address ?? $this->client->address;
        $this->client->city_id = $this->request->city ?? $this->client->city_id;
    }
}
