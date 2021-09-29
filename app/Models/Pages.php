<?php

namespace App\Models;

use App\Traits\HasSystemFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory, HasSystemFields;

    protected $fillable = [
        'parent_page_id',
        'image_path',
    ];

//    RELATION
    public function properties(){
        return $this->hasMany(Page_properties::class, 'page_id', 'id')->where('enabled', true);
    }

    public function property($lang_id){
        return $this->hasOne(Page_properties::class, 'page_id', 'id')->where('lang_id', $lang_id)->first();
    }

    public function parent() {
        return $this->hasOne(Pages::class, 'id', 'parent_page_id');
    }

    public function allParent() {
        return $this->parent()->with('parent');
    }

    public function child() {
        return $this->hasMany(Pages::class, 'parent_page_id','id');
    }

    public function allChild() {
        return $this->child()->with('child');
    }

    // PROPERTY BLOCK
    public function blocks() {
        return $this
            ->hasMany(Block::class, 'page_id', 'id')
            ->with('contents')
            ->orderBy('order', 'ASC');
    }

    public function enabled_blocks() {
        return $this->blocks();
    }

//    CUSTOM ATTRIBUTES
    public function getTitleAttribute() {
//        dd($this->properties());
        return $this->properties()->first()->title;
    }

    public function getAliasAttribute() {
        return $this->properties()->first()->alias;
    }

//    public function getPathAttribute() {
//        $path = [];
//        $parent = $this->allParent;
////        dd($parent);
////        if($this->id == 50) {
////
////            dd($parent);
////        }
//        if($parent) {
//            while($parent = $parent->parent) {
//                $path[] = $parent->alias;
//            }
//        }
//        return implode('/', array_reverse($path));
//        return (!empty($pathimplode))
//            ? implode('/', array_reverse($path))
//            : '/';
//    }
}
