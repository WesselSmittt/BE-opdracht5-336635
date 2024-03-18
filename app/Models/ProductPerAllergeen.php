<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerAllergeen extends Model
{
    use HasFactory;

    protected $table = 'productperallergeen';

    public $timestamps = false;

    protected $fillable = ['Naam'];
}
