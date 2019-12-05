<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MoveStat extends JsonResource
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
            'name' => $this->move->name,
            'type' => $this->type->name,
            'category' => $this->category->name,
            'power' => $this->power,
            'accuracy' => $this->accuracy,
            'effect' => $this->effect,
            'effect_chance' => $this->effect_chance
        ];
    }
}
