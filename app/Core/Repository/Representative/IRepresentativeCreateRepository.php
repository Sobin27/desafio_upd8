<?php
namespace App\Core\Repository\Representative;

use App\Http\Requests\Representative\CreateRepresentativeRequest;

interface IRepresentativeCreateRepository
{
    public function representativeCreate(CreateRepresentativeRequest $request): bool;
}
