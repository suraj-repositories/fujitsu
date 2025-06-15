<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    //
    protected $fillable = [
        'form_id',
        'default_label',
        'label',
        'name',
        'type',
        'enabled',
        'required',
        'options',
        'validation_rules',
        'order'
    ];

    protected $casts = [
        'options' => 'array',
        'validation_rules' => 'array',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
