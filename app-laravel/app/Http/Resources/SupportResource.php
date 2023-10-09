<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class SupportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'id' => $this -> id,
            'status' => $this -> status,
            'subject' => $this -> subject,
            'body' => $this -> body,
            'created_at' => Carbon::make($this -> created_at) -> format('Y-m-d'),
            'updated_at' => Carbon::make($this -> updated_at) -> format('Y-m-d')

        ];
    }
}
