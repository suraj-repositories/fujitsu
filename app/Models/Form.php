<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    //
    protected $fillable = ['name', 'label'];

    public function fields()
    {
        return $this->hasMany(FormField::class);
    }

}
