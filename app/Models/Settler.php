<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settler extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'settler_email',
        'settler_ip'
    ];
}
