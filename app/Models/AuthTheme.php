<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthTheme extends Model
{
    //
    protected $fillable = [
        'title',
        'view',
        'image_path',
        'direction',
        'is_applied'
    ];

}
