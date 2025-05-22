<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * mixed>
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'data'=> $this->collection,
            'meta' => [
                'organizacion' => 'platzi',
                'authors' => [
                    'Jesus',
                    'Fernando'
                ]
                ],

                'type' => 'articles'

            
        ];
    }
}
