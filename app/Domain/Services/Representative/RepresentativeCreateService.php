<?php
namespace App\Domain\Services\Representative;

use App\Core\Repository\Representative\IRepresentativeCreateRepository;
use App\Core\Repository\Representative\IVerifyIfCpfAlreadyExistsRepository;
use App\Core\Service\Representative\IRepresentativeCreateService;
use App\Http\Requests\Representative\CreateRepresentativeRequest;
use Exception;

class RepresentativeCreateService implements IRepresentativeCreateService
{
    private CreateRepresentativeRequest $request;

    public function __construct(
        private readonly IVerifyIfCpfAlreadyExistsRepository $verifyIfCpfAlreadyExistsRepository,
        private readonly IRepresentativeCreateRepository $representativeCreateRepository,
    )
    { }

    /**
     * @throws Exception
     */
    public function createRepresentative(CreateRepresentativeRequest $request): bool
    {
        $this->setRequest($request);
        $this->validateCpfAlreadyExists();
        return $this->representativeCreateRepository->representativeCreate($this->request);
    }
    private function setRequest(CreateRepresentativeRequest $request): void
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
