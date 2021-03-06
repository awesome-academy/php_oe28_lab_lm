<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
    ];
    public $timestamps = true;

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public static function boot()
    {
        parent::boot();
        static::deleting(function($category) {
            $category->books()->delete();
            $category->children()->delete();
        });
    }
}
