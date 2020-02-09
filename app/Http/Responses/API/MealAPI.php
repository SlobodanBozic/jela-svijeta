<?php


namespace App\Http\Responses\API;


use Illuminate\Http\Resources\Json\Resource;

class MealAPI extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */

    public function toArray($request)
    {

    return[
          'id' => $this->id,
          'title' => $this->title,
          'description' => $this->description,
          'status' => $this->status,
          'category' => is_null($this->category) ? $this->category = NULL :
          [
              'id' => $this->category->id,
              'title' => $this->category->title,
              'slug' => $this->category->slug
          ],
          'tag' => $this->when(isset($this->tag) ,  $this->tag),
          'ingredients' => $this->when(isset($this->ingredient) ,  $this->ingredient),
        ];
    }
}
