<?php
namespace App\Core\Support;

use JetBrains\PhpStorm\Pure;

class Pagination
{
    public int $total;
    public int $perPage;
    public int $currentPage;


    #[Pure] public static function builder (): static {
        return new Pagination();
    }

    public function setTotal(int $total): Pagination
    {
        $this->total = $total;
        return $this;
    }

    public function setPerPage(int $perPage): Pagination
    {
        $this->perPage = $perPage;
        return $this;
    }

    public function setCurrentPage(int $currentPage): Pagination
    {
        $this->currentPage = $currentPage;
        return $this;
    }
}
