<?php

namespace App\Models;

use App\Traits\HasSystemFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block_template_attributes extends Model
{
    use HasFactory, HasSystemFields;

    protected $fillable = [
        'name',
        'key',
        'type',
        'enabled',
        'default_value',
    ];

    //    NEW TYPE APPEND TO THE END
    const TYPE_LIST = [
        'image',
        'input',
        'textarea',
    ];
}
