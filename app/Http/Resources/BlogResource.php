<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
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
            'id' => $this->id,
            'slug' => $this->slug,
            'image' => $this->image ? image_url($this->image) : '',
            'title' => $this->title,
            'body' => $this->body,
            'tags' => $this->tags ? $this->tags : [],
            'lang' => $this->lang,
            'language' => $this->lang == 'en' ? 'English' : 'عربي',
            'read_time_string' => $this->read_time . ' m',
            'read_time' => $this->read_time,
            'is_active' => $this->is_active,
            'author_id' => $this->author_id,
            'author_name' => optional($this->author)->name,
            'author_data_name' => json_decode($this->author_data)->name ?? ''

        ];
    }
}
