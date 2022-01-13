<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        return parent::toArray($request);

        // php artisan serve
        // curl -v http://localhost:8001/api/user/1 | jq

        return [
            'attributes' => [
                'user' => [
//                    'id' => $this->resource->id ?: null,
                    'id' => $this->resource->id ?: null,
                    'name' => $this->resource->name,
                ]
            ]
        ];
    }
}
