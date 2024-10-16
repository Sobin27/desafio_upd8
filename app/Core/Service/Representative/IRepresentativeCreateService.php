<?php
namespace App\Core\Service\Representative;

use App\Http\Requests\Representative\CreateRepresentativeRequest;

interface IRepresentativeCreateService
{
    public function createRepresentative(CreateRepresentativeRequest $request): bool;
}
