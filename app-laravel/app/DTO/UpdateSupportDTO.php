<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateSupportRequest;
use App\Enums\SupportStatus;

class UpdateSupportDTO {

    public function __construct(public string $id, public string $subject, public string $status, public string $body) {}

    public static function makeFromRequest(StoreUpdateSupportRequest $request): self {

        return new self(

            $request -> id,
            $request -> subject,
            "Ativo",
            $request -> body

        );

    }

}
