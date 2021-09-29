<?php

namespace App\Models;

use App\Traits\HasSystemFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_properties extends Model
{
    use HasFactory, HasSystemFields;

    protected $fillable = [
        'lang_id',
        'page_id',
        'enabled',
        'title',
        'keywords',
        'description',
        'h1',
        'h2',
        'alias',
    ];

    public function page() {
        return $this->hasOne(Pages::class, 'id', 'page_id')->with('blocks');
    }

    public function lang() {
        return $this->belongsTo(Languages::class, 'lang_id');
    }

    public function scopeCurrentTranslate($query) {
        return $this->where('lang_id' , $this->lang);
    }
}
