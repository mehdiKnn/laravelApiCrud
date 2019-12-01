<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Movie extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        //     return [
        //       'id' => $this->id,
        //     'title' => $this->title,
        //   'synospsis' => $this->synopsis,
        // 'director' => $this->director,
        //'release_date' => $this->date,
        //'genus' => $this->genus,
        //];
    }
}
