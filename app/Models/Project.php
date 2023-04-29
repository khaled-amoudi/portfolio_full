<?php

namespace App\Models;

use App\Models\BaseModel\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends BaseModel
{
    use HasFactory;


    protected $fillable = [
        'id',
        'project_type',
        'project_name',
        'project_link',
        'project_image',
        'is_active',
        'order_number',
        'front_cols',
    ];

    protected $images = ['project_image'];


    public function backendProject()
    {
        return $this->hasOne(BackendProject::class, 'project_id', 'id');
    }


    public function scopeSearch(Builder $query, $request)
    {
        if ($request['name'] ?? false) {
            $query->where('name', 'LIKE', "%{$request['name']}%");
        }
        if (isset($request['is_active']) && $request['is_active'] != '') {
            $query->where('is_active', '=', $request['is_active']);
        }
        if (isset($request['project_type']) && $request['project_type'] != '') {
            $query->where('project_type', '=', $request['project_type']);
        }
    }

}
