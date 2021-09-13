<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodRecommend extends Model
{
    use HasFactory;
    protected $table = 'food_recommends';
    protected $fillable = ['name', 'phone', 'address', 'latitude', 'longitude'];
    // turn off both 
    public $timestamps = false;

    // turn off only updated_at
    const UPDATED_AT = false;
}
