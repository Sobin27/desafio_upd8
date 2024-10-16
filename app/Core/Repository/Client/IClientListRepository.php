<?php
namespace App\Core\Repository\Client;

use App\Core\Support\PaginatedList;
use App\Core\Support\Pagination;
use App\Http\Requests\Client\ListClientRequest;

interface IClientListRepository
{
    public function listClient(Pagination $pagination,ListClientRequest $request): PaginatedList;
}
