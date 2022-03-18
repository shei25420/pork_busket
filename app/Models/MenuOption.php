<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuOption extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'min', 'max'];

    public function options() {
        return $this->hasMany(Option::class);
    }
}
