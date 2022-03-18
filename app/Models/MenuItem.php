<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'menu_category_id', 'description', 'stock_option_id', 'slug', 'menu_option_id', 'menu_time_id', 'stock_product_id', 'trackable'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function category() {
        return $this->belongsTo(MenuCategory::class);
    }
}
