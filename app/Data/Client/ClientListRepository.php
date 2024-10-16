<?php
namespace App\Data\Client;

use App\Core\Repository\Client\IClientListRepository;
use App\Core\Support\PaginatedList;
use App\Core\Support\Pagination;
use App\Http\Requests\Client\ListClientRequest;
use App\Models\Client;
use Illuminate\Pagination\LengthAwarePaginator;

class ClientListRepository implements IClientListRepository
{
    public function listClient(Pagination $pagination, ListClientRequest $request): PaginatedList
    {
        return PaginatedList::builderByEloquentPagination($this->query($request), $pagination);
    }
    private function query(ListClientRequest $request): LengthAwarePaginator
    {
        return Client::query()
            ->select([
                'clients.*',
                'cities.city as city',
                'cities.state as state',
            ])
            ->join('cities', 'cities.id', '=', 'clients.city_id')
            ->where($this->getFilter($request))
            ->paginate($request->perPage);
    }
    private function getFilter(ListClientRequest $request): array
    {
        $filter = [];
        if (isset($request->name)) {
            $filter[] = ['clients.name', 'like', '%' . $request->name . '%'];
        }
        if (isset($request->city)) {
            $filter[] = ['cities.city', 'like', '%' . $request->city . '%'];
        }
        if (isset($request->state)) {
            $filter[] = ['cities.state', 'like', '%' . $request->state . '%'];
        }
        return $filter;
    }
}
