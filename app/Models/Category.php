<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;
    public $translatable = ['name', 'description'];

    public function brands()
    {
        return $this->belongsToMany(Brand::class)->withTimestamps();
    }

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function ads() {
        return $this->hasMany(Ad::class);
    }
}
