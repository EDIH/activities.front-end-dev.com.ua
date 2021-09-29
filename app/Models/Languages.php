<?php

namespace App\Models;

use App\Traits\HasSystemFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Languages extends Model
{
    use HasFactory, HasSystemFields;

    protected $fillable = [
        'iso',
        'enabled',
    ];

    public function scopeEnabled($query) {
        return $query->where('enabled', true);
    }

    public function scopeCurrent($query) {
        return $query->where('iso', App::getLocale());
    }

    public function pages() {
        return $this->hasMany(Page_properties::class, 'lang_id');
    }
}
