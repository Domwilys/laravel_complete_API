<?php

namespace App\Providers\Services;

use stdClass;
use App\DTO\CreateDepoimentDTO;
use App\DTO\UpdateDepoimentDTO;
use App\Repositories\DepoimentRepositoryInterface;
use App\Repositories\PaginationInterface;

class DepoimentService {

    public function __construct(protected DepoimentRepositoryInterface $repository) {

    }

    public function paginate(int $page = 1, int $totalPerPage = 30, string $filter = null): PaginationInterface {
        return $this -> repository -> paginate(
            page: $page,
            totalPerPage: $totalPerPage,
            filter: $filter,
        );
    }

    public function getAll(string $filter = null):array {
        return $this -> repository -> getAll($filter);
    }

    public function findOne(string|int $id):stdClass|null {
        return $this -> repository -> findOne($id);
    }

    public function new(CreateDepoimentDTO $dto):stdClass {
        return $this -> repository -> new($dto);
    }

    public function update(UpdateDepoimentDTO $dto):stdClass|null {
        return $this -> repository -> update($dto);
    }

    public function delete(string|int $id):void {
        $this -> repository -> delete($id);
    }
}
