<?php
namespace App\Data\Client;

use App\Core\Repository\Client\IClientCreateRepository;
use App\Http\Requests\Client\CreateClientRequest;
use App\Models\Client;

class ClientCreateRepository implements IClientCreateRepository
{
    public function clientCreate(CreateClientRequest $request): bool
    {
        $client = Client::query()->create([
           'name' => $request->name,
            'cpf' => $request->cpf,
            'birth_date' => $request->birth_date,
            'sex' => $request->sex,
            'address' => $request->address,
            'city_id' => $request->city,
        ]);
        if ($client) return true;
        return false;
    }
}
