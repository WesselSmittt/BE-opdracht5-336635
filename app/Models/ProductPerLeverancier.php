<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerLeverancier extends Model
{
    use HasFactory;
    protected $table = 'product_per_leverancier';

    public $timestamps = false;

    protected $fillable = ['ProductId', 'LeverancierId'];
}