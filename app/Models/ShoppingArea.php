<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingArea extends Model
{
    use HasFactory;
    protected $table = 'shopping_area';
    protected $fillable = ['name', 'latitude', 'longitude', 'description', 'organization', 'transportation'];
    // turn off both 
    public $timestamps = false;

    // turn off only updated_at
    const UPDATED_AT = false;
}
