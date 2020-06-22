<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->bookName,
            'author' => $this->author->firstName,
            'pages' => $this->numberOfPages,
            'print_date' => Carbon::make($this->created_at)->toDateTimeString(),
        ];
    }
}
