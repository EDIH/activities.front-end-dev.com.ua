<?php

namespace App\Models;

use App\Traits\HasSystemFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory, HasSystemFields;

//    protected $table = "picture";

    protected $fillable = [
        'name',
        'year',
        'size',
        'price',
        'path',
        'author_id',
        'order',
        'admin_created_id',
        'admin_updated_id'
    ];
}
