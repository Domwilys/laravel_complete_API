<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateDepoimentRequest;

class UpdateDepoimentDTO {

    public function __construct(public string $id, public string $nome, public string $email, public string $ocupacao, public string $depoimento) {}

    public static function makeFromRequest(StoreUpdateDepoimentRequest $request, string $id = null): self {

        return new self(

            $id ?? $request -> id,
            $request -> nome,
            $request -> email,
            $request -> ocupacao,
            $request -> depoimento

        );

    }

}
