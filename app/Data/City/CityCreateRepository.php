<?php
namespace App\Data\City;

use App\Core\Repository\City\ICityCreateRepository;
use App\Http\Requests\City\CreateCityRequest;
use App\Models\City;

class CityCreateRepository implements ICityCreateRepository
{
    public function cityCreate(CreateCityRequest $request): bool
    {
        $city = City::query()->create([
            'state' => $request->state,
            'city' => $request->city,
        ]);
        if ($city) return true;
        return false;
    }
}
