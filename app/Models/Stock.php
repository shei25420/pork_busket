<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'stock_option_id', 'inventory_id'];

    public function products() {
        return $this->hasMany(StockProduct::class);
    }
}
