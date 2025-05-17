<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'metadata', 'tags'];
    protected $casts = [
        'metadata' => 'array',
        //'tags' => 'array',
    ];

    // Mutator to convert PHP array to Postgres array string on set
    public function setTagsAttribute($value)
    {
        if (is_array($value)) {
            // Escape commas inside values if necessary
            $escaped = array_map(fn($tag) => str_replace('"', '\\"', $tag), $value);
            $this->attributes['tags'] = '{' . implode(',', $escaped) . '}';
        } else {
            $this->attributes['tags'] = $value;
        }
    }

    // Accessor to convert Postgres array string back to PHP array on get
    public function getTagsAttribute($value)
    {
        return $value ? explode(',', trim($value, '{}')) : [];
    }
}
