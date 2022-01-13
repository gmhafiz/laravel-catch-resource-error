<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     *
     * @return array
     */
    #[ArrayShape(['attributes' => "array[]"])] public function toArray($request): array
    {
//        return parent::toArray($request);

        // php artisan serve
        // curl -v http://localhost:8001/api/user/1

        return [
            'attributes' => [
                'user' => [
//                    'id' => $this->resource->id ?: null,
                    'id' => $this->resource_typo->id ?: null,
                    'name' => $this->resource->name,
                ]
            ]
        ];
    }
}
