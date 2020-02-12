<?php


namespace App\Http\Responses\API;


use Illuminate\Http\Resources\Json\Resource;

class TagAPI extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
          ];

    }
}
