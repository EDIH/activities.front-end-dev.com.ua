<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function instructors()
    {
        return $this->hasOne(Instructors::class);
    }

    public function students()
    {
        return $this->hasOne(Students::class);
    }

    public function profile()
    {
        return $this->instructors
            ?: $this->students;
    }


    /**
     * The attributes that should be class name of profile.
     *
     * @return string
     */
    public function type(): string
    {
        return strtolower(class_basename($this->profile()));
    }

}
