<?php

namespace App\Models;

use App\Traits\HasSystemFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Block_content_translations extends Model
{
    use HasFactory, HasSystemFields;

    protected $fillable = [
        'value',
//        'sub_title',
//        'content',
//        'link',
//        'image_path',
        'lang_id',
        'block_content_id',
    ];

    protected $lang_id;

    public function __construct(array $attributes = [])
    {
        $this->lang_id = Languages::where('iso', App::getLocale())->first()->id;

        parent::__construct($attributes);
    }

    public function __get($attribute) {
        return $this->getAttributeValue($attribute) ?? $this->getRelationValue($attribute) ?? '';
    }

    // OWNER CONTENT
    public function content () {
        return $this
            ->hasOne(Block_contents::class, 'id', 'block_id')
            ->with('contents');
    }


    // PROPERTY OPTION
    public function options () {
        return $this->hasMany(Block_option_content_translations::class,'block_content_translation_id', 'id');
    }

    public function optionContent($type_name) {
        return $this->options->mapToGroups(function ($item, $key) {
            $type_name = Block_option_content_translations::TYPE_LIST[$item['type']];
            return [$type_name => $item['value']];
        })[$type_name];
    }

    public function scopeCurrent($query) {
        return $query->where('lang_id', $this->lang_id);
    }
}
