<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','image','is_visible'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
