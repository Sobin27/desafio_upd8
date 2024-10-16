<?php
namespace App\Http\Controllers;


use App\Core\Service\Client\IClientCreateService;
use App\Core\Service\Client\IClientDeleteService;
use App\Core\Service\Client\IClientListService;
use App\Core\Service\Client\IClientUpdateService;
use App\Http\Requests\Client\CreateClientRequest;
use App\Http\Requests\Client\ListClientRequest;
use App\Http\Requests\Client\UpdateClientRequest;
use Exception;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{
    public function __construct(
        private readonly IClientCreateService $clientCreateService,
        private readonly IClientUpdateService $clientUpdateService,
        private readonly IClientDeleteService $clientDeleteService,
        private readonly IClientListService $clientListService
    )
    { }

    public function createClient(CreateClientRequest $request): Response
    {
        try {
            return response()->json([
                'message' => 'Client created',
                'data' => $this->clientCreateService->createClient($request)
            ], 201);
        }catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
    public function updateClient(UpdateClientRequest $request): Response
    {
        try {
            return response()->json([
                'message' => 'Client updated',
                'data' => $this->clientUpdateService->updateClient($request)
            ]);
        }catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
    public function deleteClient(int $id): Response
    {
        try {
            return response()->json([
                'message' => 'Client deleted',
                'data' => $this->clientDeleteService->deleteClient($id)
            ]);
        }catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
    public function listClients(ListClientRequest $request): Response
    {
        try {
            return response()->json([
                'message' => 'Clients listed',
                'data' => $this->clientListService->listClients($request)
            ]);
        }catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
