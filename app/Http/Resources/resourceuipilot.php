<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class resourceuipilot extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'نام هواپیما' => $this -> first_name ,
            'مدل هواپیما' => $this -> last_name ,
            'سال ساخت هواپیما' => $this -> age

        ];
    }
}
