<?php
namespace App\Data\Representative;

use App\Core\Repository\Representative\IRepresentativeCreateRepository;
use App\Http\Requests\Representative\CreateRepresentativeRequest;
use App\Models\Representative;

class RepresentativeCreateRepository implements IRepresentativeCreateRepository
{
    public function representativeCreate(CreateRepresentativeRequest $request): bool
    {
        $representative = Representative::query()->create([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'phone' => $request->phone,
            'city_id' => $request->city,
        ]);
        if ($representative)  return true;
        return false;
    }
}
