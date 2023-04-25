<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackendProject extends Model
{
    use HasFactory;

    protected $table = "backend_projects";


    protected $fillable = [
        'id',
        'project_id',
        'description',
        'characteristics_list',
        'tools_list',
        'mockups',
        'github_repo_link'
    ];

    protected $casts = [
        'characteristics_list' => 'array',
        'tools_list' => 'array',
        'mockups' => 'array'
    ];
}
