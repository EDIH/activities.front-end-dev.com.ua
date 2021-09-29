<?php

namespace App\Models;

use App\Traits\HasSystemFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory, HasSystemFields;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'date_of_receipt',
        'phone_number',
        'email',
        'salary',
        'boss_id',
        'position`_id',
//        'admin_created_id',
//        'admin_updated_id'
    ];
}
