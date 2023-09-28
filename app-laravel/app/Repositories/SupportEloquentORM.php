<?php

namespace App\Repositories;

use stdClass;

use App\Repositories\SupportRepositoryInterface;
use App\DTO\{CreateSupportDTO, UpdateSupportDTO};
use App\Models\Support;
use App\Repositories\PaginationPresenter;
use App\repositories\PaginationInterface;

class SupportEloquentORM implements SupportRepositoryInterface {

    public function __construct(protected Support $model) {

    }

    public function paginate(int $page = 1, int $totalPerPage = 30, string $filter = null): PaginationInterface{

        $result =  $this -> model -> where(function ($querry) use ($filter) {
            if($filter) {
                $querry -> where('subject', $filter);
                $querry -> where('body', 'like', '%{$filter}%');
            }
        }) -> paginate($totalPerPage, ['*'], 'page', $page);

        //dd((new PaginationPresenter($result)) -> total());

        return new PaginationPresenter($result);

    }

    public function getAll(string $filter = null): array{

        return $this -> model -> where(function ($querry) use ($filter) {
            if($filter) {
                $querry -> where('subject', $filter);
                $querry -> where('body', 'like', '%{$filter}%');
            }
        }) -> get() -> toArray();

    }

    public function findOne(string $id): stdClass|null{

        $support = $this -> model -> find($id);

        if(!$support) {
            return null;
        }

        return (object) $support -> toArray();

    }

    public function delete(string $id): void{

        $this -> model -> findOrFail($id) -> delete();

    }

    public function new(CreateSupportDTO $dto): stdClass{

        $support = $this -> model -> create((array) $dto);

        return (object) $support -> toArray();

    }

    public function update(UpdateSupportDTO $dto): stdClass|null{

        $support = $this -> model -> find($dto -> id);

        if(!$support) {
            return null;
        }

        $support -> update((array) $dto);

        return (object) $support -> toArray();

    }

}