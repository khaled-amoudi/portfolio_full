<?php

namespace App\Models;

use App\Models\BaseModel\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'avatar',
        'socials'
    ];

    protected $casts = [
        'socials' => 'array',
    ];

    protected $images = [
        'avatar'
    ];

    public function scopeSearch(Builder $query, $request)
    {
        if ($request['name'] ?? false) {
            $query->where('name', 'LIKE', "%{$request['name']}%");
        }
    }


}
