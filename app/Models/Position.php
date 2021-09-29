<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasSystemFields;

class Position extends Model
{
    use HasFactory, HasSystemFields;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
//        'admin_created_id',
//        'admin_updated_id'
    ];


}
