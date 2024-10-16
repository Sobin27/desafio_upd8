<?php
namespace App\Providers\DependencyInjection;

use App\Core\Repository\City\ICityCreateRepository;
use App\Core\Service\City\ICityCreateService;
use App\Data\City\CityCreateRepository;
use App\Domain\Services\City\CityCreateService;

class CityDi extends DependencyInjection
{
    protected function services(): array
    {
        return [
            [ICityCreateService::class, CityCreateService::class],
        ];
    }
    protected function repositories(): array
    {
        return [
            [ICityCreateRepository::class, CityCreateRepository::class]
        ];
    }
}
