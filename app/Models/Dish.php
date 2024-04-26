<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','image','is_visible', 'ingredients'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }

    public function getAbstract() {
        $abstract = substr($this->ingredients, 0, 60) . '...';
        if(strlen($this->ingredients) > 60) {
            return $abstract;
        } else {
            return $this->ingredients;
        }
    }

    public function getFormattedDate($date, $format = 'd-m-Y') {
        return Carbon::create($date)->format($format);
    }


}
