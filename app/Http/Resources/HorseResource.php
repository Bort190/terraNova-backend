<?php

namespace App\Http\Resources;

use App\Models\Horse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property number $id
 * @property string $name
 * @property string $type
 * @property mixed $age
 */
class HorseResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'age' =>$this->age
        ];
    }
}
