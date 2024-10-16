<?php
namespace App\Domain\Services\Client;

use App\Core\Repository\Client\IClientCreateRepository;
use App\Core\Repository\Client\IVerifyIfCpfAlreadyExistsRepository;
use App\Core\Service\Client\IClientCreateService;
use App\Http\Requests\Client\CreateClientRequest;
use Exception;

class ClientCreateService implements IClientCreateService
{
    private CreateClientRequest $request;

    public function __construct(
        private readonly IVerifyIfCpfAlreadyExistsRepository $verifyIfCpfAlreadyExistsRepository,
        private readonly IClientCreateRepository $clientCreateRepository,
    )
    { }

    /**
     * @throws Exception
     */
    public function createClient(CreateClientRequest $request): bool
    {
        $this->setRequest($request);
        $this->validateCpfAlreadyExists();
        return $this->clientCreateRepository->clientCreate($this->request);
    }
    private function setRequest(CreateClientRequest $request): void
    {
        $this->request = $request;
    }

    /**
     * @throws Exception
     */
    private function validateCpfAlreadyExists(): void
    {
        if ($this->verifyIfCpfAlreadyExistsRepository->verifyIfCpfAlreadyExists($this->request->cpf)) {
            throw new Exception('CPF already exists');
        }
    }
}
