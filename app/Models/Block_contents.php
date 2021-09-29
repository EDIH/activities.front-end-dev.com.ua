<?php

namespace App\Models;

use App\Traits\HasSystemFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Block_contents extends Model
{
    use HasFactory, HasSystemFields, SoftDeletes;

    protected $fillable = [
        'block_id',
        'block_template_attribute_id',
        'enabled',
    ];

    // OWNER BLOCK
    public function block () {
        return $this
            ->hasOne(Block::class, 'id', 'block_id')
            ->with('contents');
    }

    // PROPERTY TRANSLATE
    public function translations () {
        return $this
            ->hasMany(Block_content_translations::class,'block_content_id', 'id')
            ->with('options');
    }

    public function translate() {

        return $this
            ->hasOne(Block_content_translations::class, 'block_content_id', 'id')
            ->current()
            ->with('options');
    }

    public function mappedByLang () {
        return $this
            ->translations
            ->mapWithKeys(function($translation) {
                return [$translation->lang_id => $translation];
            });
    }

    public function scopeAttribute($query, $attr_id) {
        return $query->where('block_template_attribute_id', $attr_id);
    }

    // OWNER TEMPLATE ATTRIBUTE
    public function attr () {
        return $this
            ->hasOne(Block_template_attributes::class, 'id', 'block_template_attribute_id')
//            ->with('contents')
            ;
    }

//    public function scopeCurrentLocal()

//    public function scopeTranslate() {
//
//    }
}
