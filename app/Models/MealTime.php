<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealTime extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'start', 'end'];

    public function menu_items() {
        return $this->hasMany(MenuCategory::class);
    }
}
