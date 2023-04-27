<?php

namespace App\Models;

use App\Models\BaseModel\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'id',
        'slug',
        'image',
        'title',
        'body',
        'lang',
        'read_time',
        'is_active',
        'author_id',
        'author_data'
    ];

    protected $casts = [
        'author_data' => 'array',
    ];

    protected $images = ['image'];

    protected $with = ['tags'];

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }


    public function author() {
        return $this->belongsTo(Author::class);
    }


    public function scopeSearch(Builder $query, $request)
    {
        if ($request['title'] ?? false) {
            $query->where('title', 'LIKE', "%{$request['title']}%");
        }
        if (isset($request['is_active']) && $request['is_active'] != '') {
            $query->where('is_active', '=', $request['is_active']);
        }
    }

}
