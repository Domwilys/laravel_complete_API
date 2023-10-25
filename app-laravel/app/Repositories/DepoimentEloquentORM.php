<?php

namespace App\Repositories;

use stdClass;

use App\Repositories\DepoimentRepositoryInterface;
// use App\DTO\{CreateSupportDTO, UpdateSupportDTO};
use App\DTO\{CreateDepoimentDTO, UpdateDepoimentDTO};
// use App\Models\Support;
use App\Models\depoiments;
use App\Repositories\PaginationPresenter;
use App\repositories\PaginationInterface;

class DepoimentEloquentORM implements DepoimentRepositoryInterface {

    public function __construct(protected depoiments $model) {

    }

    public function paginate(int $page = 1, int $totalPerPage = 30, string $filter = null): PaginationInterface{

        $result =  $this -> model -> where(function ($querry) use ($filter) {
            if($filter) {
                $querry -> orWhere('nome', 'like', "%{$filter}%");
                $querry -> orWhere('email', 'like', "%{$filter}%");
                $querry -> orWhere('ocupacao', 'like', "%{$filter}%");
                $querry -> orWhere('depoimento', 'like', "%{$filter}%");
            }
        }) -> paginate($totalPerPage, ['*'], 'page', $page);

        //dd((new PaginationPresenter($result)) -> total());

        return new PaginationPresenter($result);

    }

    public function getAll(string $filter = null): array{

        return $this -> model -> where(function ($querry) use ($filter) {
            if($filter) {
                $querry -> where('nome', $filter);
                $querry -> where('email', 'like', "%{$filter}%");
                $querry -> where('ocupacao', 'like', "%{$filter}%");
                $querry -> where('depoimento', 'like', "%{$filter}%");
            }
        }) -> get() -> toArray();

    }

    public function findOne(string $id): stdClass|null{

        $depoiment = $this -> model -> find($id);

        if(!$depoiment) {
            return null;
        }

        return (object) $depoiment -> toArray();

    }

    public function delete(string $id): void{

        $this -> model -> findOrFail($id) -> delete();

    }

    public function new(CreateDepoimentDTO $dto): stdClass{

        $depoiment = $this -> model -> create((array) $dto);

        return (object) $depoiment -> toArray();

    }

    public function update(UpdateDepoimentDTO $dto): stdClass|null{

        $depoiment = $this -> model -> find($dto -> id);

        if(!$depoiment) {
            return null;
        }

        $depoiment -> update((array) $dto);

        return (object) $depoiment -> toArray();

    }

}
