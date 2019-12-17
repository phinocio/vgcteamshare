<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Pokemon;

class Team extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'author' => $this->author->name ?? 'Anonymous',
            'format' => $this->format->name,
            'pokemon' => Pokemon::collection($this->pokemon),
            'slug' => $this->slug,
            'rental_code' => $this->rental_code,
            'private' => $this->private,
            'created' => $this->created_at
        ];
    }
}
