<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'project_type' => $this->project_type,
            'project_name' => $this->project_name,
            'project_link' => $this->project_link,
            'project_image' => $this->project_image ? image_url($this->project_image) : '',
            'is_active' => $this->is_active,
            'order_number' => $this->order_number,
            'front_cols' => json_decode($this->front_cols),
            'front_cols_sm' => json_decode($this->front_cols)->col_sm ?? null,
            'front_cols_lg' => json_decode($this->front_cols)->col_lg ?? null,


            'backendProject' => $this->backendProject ?? null,
            'description' => $this->backendProject ?  $this->backendProject->description : '',
            'features_list' => $this->backendProject ?  json_decode($this->backendProject->features_list ?? "[]") : [],
            'characteristics_list' => $this->backendProject ?  json_decode($this->backendProject->characteristics_list ?? "[]") : [],
            'tools_list' => $this->backendProject ?  json_decode($this->backendProject->tools_list ?? "[]") : [],
            'mockups' => $this->backendProject ?  json_decode($this->backendProject->mockups ?? "[]") : [],
            'github_repo_link' => $this->backendProject ?  $this->backendProject->github_repo_link : ''

            // 'tags' => $this->tags ? $this->tags->get() : [],
            // 'author_data_name' => json_decode($this->author_data)->name ?? ''

        ];
    }
}
