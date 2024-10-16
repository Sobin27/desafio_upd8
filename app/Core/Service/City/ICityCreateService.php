<?php
namespace App\Core\Service\City;

use App\Http\Requests\City\CreateCityRequest;

interface ICityCreateService
{
    public function createCity(CreateCityRequest $request): bool;
}
