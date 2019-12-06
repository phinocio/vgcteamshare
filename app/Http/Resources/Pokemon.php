<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\MoveStat;
use App\Http\Resources\Nature;
use App\Http\Resources\Item;

class Pokemon extends JsonResource
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
            'name' => $this->name,
            'image' => $this->image,
            'nature' => new Nature($this->nature[0]),
            'item' => new Item($this->item[0]),
            'hp' => $this->hit_points,
            'atk' => $this->attack,
            'def' => $this->defense,
            'spa' => $this->special_attack,
            'spd' => $this->special_defense,
            'spe' => $this->speed,
            'evs' => $this->pivot->evs,
            'ivs' => $this->pivot->ivs,
            'moves' => [
                new MoveStat($this->move1[0]->stats),
                new MoveStat($this->move2[0]->stats),
                new MoveStat($this->move3[0]->stats),
                new MoveStat($this->move4[0]->stats)                
            ]
        ];
    }
}
