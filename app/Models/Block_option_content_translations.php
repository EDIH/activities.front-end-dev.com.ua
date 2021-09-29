<?php

namespace App\Models;

use App\Traits\HasSystemFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Block_option_content_translations extends Model
{
    use HasFactory, HasSystemFields, SoftDeletes;

    protected $fillable = [
        'type',
        'value',
        'block_content_translation_id'
    ];

//    NEW TYPE APPEND TO THE END
//    const TYPE_LIST = [
//        'image',
//        'input',
//        'textarea',
//    ];

    public function __get($attribute) {
        return $this->getAttributeValue($attribute) ?? $this->getRelationValue($attribute) ?? '';
    }

    public function content () {
        return $this->hasOne(Block_contents::class,'id', 'block_id');
    }


    public function options () {
        return $this->hasMany(Block_option_content_translations::class,'block_content_translation_id');
    }


}
