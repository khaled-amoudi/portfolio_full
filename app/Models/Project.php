<?php

namespace App\Models;

use App\Models\BaseModel\BaseModel;
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
    ];

    protected $images = ['project_image'];


    public function backendProject()
    {
        return $this->hasOne(BackendProject::class, 'project_id', 'id');
    }

}
