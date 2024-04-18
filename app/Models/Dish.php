<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','image','is_visible'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function getAbstract() {
        $abstract = substr($this->ingredients, 0, 40) . '...';
        if(strlen($this->ingredients) > 40) {
            return $abstract;
        } else {
            return $this->ingredients;
        }
    }

    public function getFormattedDate($date, $format = 'd-m-Y') {
        return Carbon::create($date)->format($format);
    }
}
