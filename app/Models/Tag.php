<?php

namespace App\Models;

use App\Models\BaseModel\BaseModel;
use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends BaseModel
{
    use HasFactory;


    protected $fillable = [
        'id',
        'name'
    ];

    public function blogs() {
        return $this->belongsToMany(Blog::class);
    }

    public function scopeSearch(Builder $query, $request)
    {
        if ($request['name'] ?? false) {
            $query->where('name', 'LIKE', "%{$request['name']}%");
        }
    }

}
