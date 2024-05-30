<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, Sluggable;

    public $table = 'categories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
    
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function isTopLevel() {
        if ($this->parent_id == null) {
            return true;
        }
        else {
            return false;
        }
    }
    public function sluggable() : array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
