<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateSupportRequest;
use App\Enums\SupportStatus;

class UpdateSupportDTO {

    public function __construct(public string $id, public string $subject, public string $status, public string $body) {}

    public static function makeFromRequest(StoreUpdateSupportRequest $request, string $id = null): self {

        return new self(

            $id ?? $request -> id,
            $request -> subject,
            "Ativo",
            $request -> body

        );

    }

}
