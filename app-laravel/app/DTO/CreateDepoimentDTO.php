<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateDepoimentRequest;

class CreateDepoimentDTO {

    public function __construct(public string $nome, public string $email, public string $ocupacao, public string $depoimento) {}

    public static function makeFromRequest(StoreUpdateDepoimentRequest $request): self {

        return new self(

            $request -> nome,
            $request -> email,
            $request -> ocupacao,
            $request -> depoimento

        );

    }

}
