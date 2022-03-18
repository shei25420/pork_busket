<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'priority', 'description'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function menu_items() {
        return $this->hasMany(MenuItem::class);
    }
}
