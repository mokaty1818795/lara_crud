<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class v1CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       return [
           'id'=>$this->id,
           'name'=>$this->name,
           'type'=>$this->type,
           'email'=>$this->email,
           'city'=>$this->city,
           'state'=>$this->state,
           'postalCode'=>$this->postal_code,
           'createdAt'=>$this->created_at,
           'updatedAt'=>$this->updated_at,
       ];
    }
}
