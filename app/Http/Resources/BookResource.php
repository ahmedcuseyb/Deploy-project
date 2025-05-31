<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'description' => $this->description,
            'image_url'   => $this->image ? asset('storage/' . $this->image) : null,
            'created_at'  => $this->created_at,
        ];
    }
}
