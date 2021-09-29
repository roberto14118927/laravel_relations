<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id_user_coppel' => $this->id,
            'email_user_coppel' => $this->email,
            'nombre_user_coppel' => $this->name,
            'email_user_coppel' => $this->email,
        ];
    }
}
