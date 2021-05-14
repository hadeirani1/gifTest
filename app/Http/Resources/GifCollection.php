<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GifCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return 
        [
            'GIF Name' => $this->name,
            'GIF Key' => $this->key,
            'href' => url('/gifs/'.$this->name)
        ];
    }
}
