<?php

namespace App\Models;

use App\Traits\HasSystemFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Block extends Model
{
    use HasFactory, HasSystemFields, SoftDeletes;

    protected $fillable = [
        'page_id',
        'block_template_id',
        'order',
        'enabled',
        'deleted'
    ];

    // OWNER PAGE
    public function page() {
        return $this->hasOne(Pages::class, 'id', 'page_id');
    }

    // PROPERTY TEMPLATE
    public function template() {
        return $this
            ->hasOne(Block_templates::class, 'id', 'block_template_id')
            ->with('attrs');
    }

    public function attrs() {
        return $this->template->attrs;
    }

    // PROPERTIES CONTENT
    public function contents() {
        return $this
            ->hasMany(Block_contents::class,'block_id', 'id');
    }

    public function scopeEnabled($query) {
        return $this->where('enabled');
    }
}
