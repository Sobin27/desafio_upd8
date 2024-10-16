<?php
namespace App\Providers\DependencyInjection;

use App\Core\Repository\Representative\IRepresentativeCreateRepository;
use App\Core\Repository\Representative\IVerifyIfCpfAlreadyExistsRepository;
use App\Core\Service\Representative\IRepresentativeCreateService;
use App\Data\Representative\RepresentativeCreateRepository;
use App\Data\Representative\VerifyIfCpfAlreadyExistsRepository;
use App\Domain\Services\Representative\RepresentativeCreateService;

class RepresentativeDi extends DependencyInjection
{
    protected function services(): array
    {
        return [
          [IRepresentativeCreateService::class, RepresentativeCreateService::class],
        ];
    }

    protected function repositories(): array
    {
        return [
            [IVerifyIfCpfAlreadyExistsRepository::class, VerifyIfCpfAlreadyExistsRepository::class],
            [IRepresentativeCreateRepository::class, RepresentativeCreateRepository::class],
        ];
    }
}
