<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructors extends Model
{
    use HasFactory;

    protected $fillable = [
        'surname',
        'name',
        'photo_path',
        'phone_number',
        'email',
        'tax',
        'password',
        'remember_token',
        'balance_id',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
