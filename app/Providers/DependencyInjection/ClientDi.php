<?php
namespace App\Providers\DependencyInjection;

use App\Core\Repository\Client\IClientCreateRepository;
use App\Core\Repository\Client\IClientDeleteRepository;
use App\Core\Repository\Client\IClientFindByIdRepository;
use App\Core\Repository\Client\IClientListRepository;
use App\Core\Repository\Client\IClientUpdateRepository;
use App\Core\Repository\Client\IVerifyIfCpfAlreadyExistsRepository;
use App\Core\Service\Client\IClientCreateService;
use App\Core\Service\Client\IClientDeleteService;
use App\Core\Service\Client\IClientListService;
use App\Core\Service\Client\IClientUpdateService;
use App\Data\Client\ClientCreateRepository;
use App\Data\Client\ClientDeleteRepository;
use App\Data\Client\ClientFindByIdRepository;
use App\Data\Client\ClientListRepository;
use App\Data\Client\ClientUpdateRepository;
use App\Data\Client\VerifyIfCpfAlreadyExistsRepository;
use App\Domain\Services\Client\ClientCreateService;
use App\Domain\Services\Client\ClientDeleteService;
use App\Domain\Services\Client\ClientListService;
use App\Domain\Services\Client\ClientUpdateService;

class ClientDi extends DependencyInjection
{
    protected function services(): array
    {
        return [
            [IClientCreateService::class, ClientCreateService::class],
            [IClientUpdateService::class, ClientUpdateService::class],
            [IClientDeleteService::class, ClientDeleteService::class],
            [IClientListService::class, ClientListService::class],
        ];
    }

    protected function repositories(): array
    {
        return [
            [IClientCreateRepository::class, ClientCreateRepository::class],
            [IVerifyIfCpfAlreadyExistsRepository::class, VerifyIfCpfAlreadyExistsRepository::class],
            [IClientFindByIdRepository::class, ClientFindByIdRepository::class],
            [IClientUpdateRepository::class, ClientUpdateRepository::class],
            [IClientDeleteRepository::class, ClientDeleteRepository::class],
            [IClientListRepository::class, ClientListRepository::class],
        ];
    }
}
