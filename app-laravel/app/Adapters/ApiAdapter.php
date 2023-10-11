<?php

namespace App\Adapters;

use App\Repositories\PaginationInterface;
use App\Http\Resources\DefaultResource;

class ApiAdapter {

    public static function toJson(PaginationInterface $data) {

        return DefaultResource::collection($data -> items()) -> additional([
            'meta' => [
                'total' => $data -> total(),
                'currentPage' => $data -> currentPage(),
                'nextPage' => $data -> nextPage(),
                'previusPage' => $data -> previusPage(),
                'isFirstPage' => $data -> isFirstPage(),
                'isLastPage' => $data -> isLastPage(),
            ]
        ]);

    }

}
