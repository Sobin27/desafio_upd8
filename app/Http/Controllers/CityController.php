<?php
namespace App\Http\Controllers;

use App\Core\Service\City\ICityCreateService;
use App\Http\Requests\City\CreateCityRequest;
use Exception;
use Symfony\Component\HttpFoundation\Response;

class CityController extends Controller
{
    public function __construct(
        private readonly ICityCreateService $cityCreateService
    )
    { }

    public function createCity(CreateCityRequest $request): Response
    {
        try {
            return response()->json([
                'message' => 'City created',
                'data' => $this->cityCreateService->createCity($request)
            ], 201);
        }catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
