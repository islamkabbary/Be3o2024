<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    public $translatable = ['name', 'description'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
