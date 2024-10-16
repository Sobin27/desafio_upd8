<?php
namespace App\Domain\Services\City;

use App\Core\Repository\City\ICityCreateRepository;
use App\Core\Service\City\ICityCreateService;
use App\Http\Requests\City\CreateCityRequest;

class CityCreateService implements ICityCreateService
{
    public function __construct(
        private readonly ICityCreateRepository $cityCreateRepository,
    )
    { }
    public function createCity(CreateCityRequest $request): bool
    {
        return $this->cityCreateRepository->cityCreate($request);
    }
}
