<?php
namespace App\Core\Repository\City;

use App\Http\Requests\City\CreateCityRequest;

interface ICityCreateRepository
{
    public function cityCreate(CreateCityRequest $request): bool;
}
