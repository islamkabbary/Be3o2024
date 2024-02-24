<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Brand extends Model
{
    use HasTranslations;
    public $translatable = ['name', 'description'];

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function details()
    {
        return $this->belongsToMany(BrandDetails::class, "brand_details")->withPivot(['category_id', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'])->withTimestamps();
    }
}
