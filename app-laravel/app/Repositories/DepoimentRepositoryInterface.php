<?php

namespace App\Repositories;

use stdClass;
use App\DTO\{CreateDepoimentDTO, UpdateDepoimentDTO};
use App\Repositories\PaginationInterface;


interface DepoimentRepositoryInterface {

    public function paginate(int $page = 1, int $totalPerPage = 30, string $filter = null): PaginationInterface;
    public function getAll(string $filter = null):array;
    public function findOne(string $id): stdClass|null;
    public function delete(string $id): void;
    public function new(CreateDepoimentDTO $dto): stdClass;
    public function update(UpdateDepoimentDTO $dto): stdClass|null;

}
