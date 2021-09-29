<?php

namespace App\Models;

use App\Traits\HasSystemFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block_content_values extends Model
{
    use HasFactory, HasSystemFields;

    protected $fillable = [
        'title',
        'sub_title',
        'content',
        'link',
        'image',
        'lang_id',
        'block_content_id'
    ];


    public static function type_list() {
        return [
            'image' => __('system.image'),
            'input' => __('system.input'),
            'textarea' => __('system.textarea'),
        ];
    }



}
