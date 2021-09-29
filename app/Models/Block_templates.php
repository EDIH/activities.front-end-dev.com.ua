<?php

namespace App\Models;

use App\Traits\HasSystemFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\File;

class Block_templates extends Model
{
    use HasFactory, HasSystemFields, SoftDeletes;

    protected $fillable = [
        'path',
        'name',
        'enabled',
        'image_path',
    ];

    public static function template_list() {
        $path = resource_path('views/client/block_templates/templates');
        $templates = File::allFiles($path);
        return $templates;
    }

    // PROPERTIES ATTRIBUTES
    public function attrs() {
        return $this
            ->hasMany(Block_template_attributes::class,'block_template_id', 'id');
    }
}
