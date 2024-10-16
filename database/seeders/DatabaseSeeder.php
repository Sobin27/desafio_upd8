<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Client;
use App\Models\Representative;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $cities = [
            ['city' => 'São Paulo', 'state' => 'SP'],
            ['city' => 'Rio de Janeiro', 'state' => 'RJ'],
            ['city' => 'Belo Horizonte', 'state' => 'MG'],
            ['city' => 'Curitiba', 'state' => 'PR'],
            ['city' => 'Porto Alegre', 'state' => 'RS'],
            ['city' => 'Salvador', 'state' => 'BA'],
            ['city' => 'Recife', 'state' => 'PE'],
            ['city' => 'Fortaleza', 'state' => 'CE'],
            ['city' => 'Brasília', 'state' => 'DF'],
            ['city' => 'Goiânia', 'state' => 'GO'],
        ];
        foreach ($cities as $city) {
            City::query()->create($city);
        }
        Client::factory(50)->make()->each(function (Client $client) {
            $client->city_id = City::query()->inRandomOrder()->first()->id;
            $client->save();
        });
        Representative::factory(50)->make()->each(function (Representative $representative) {
            $representative->city_id = City::query()->inRandomOrder()->first()->id;
            $representative->save();
        });
    }
}
