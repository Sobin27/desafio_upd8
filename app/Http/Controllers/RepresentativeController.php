<?php
namespace App\Http\Controllers;

use App\Core\Service\Representative\IRepresentativeCreateService;
use App\Http\Requests\Representative\CreateRepresentativeRequest;
use Exception;
use Symfony\Component\HttpFoundation\Response;

class RepresentativeController extends Controller
{
    public function __construct(
        private IRepresentativeCreateService $representativeCreateService,
    )
    { }

    public function createRepresentative(CreateRepresentativeRequest $request): Response
    {
        try {
            return response()->json([
                'message' => 'Representative created',
                'data' => $this->representativeCreateService->createRepresentative($request)
            ], 201);
        }catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
