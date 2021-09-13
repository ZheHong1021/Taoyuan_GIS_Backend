<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;
    
    protected $table = 'population';
    protected $fillable = ['district', 'total'];

    // turn off both 
    public $timestamps = false;

    // turn off only updated_at
    const UPDATED_AT = false;
}
