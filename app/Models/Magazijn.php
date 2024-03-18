<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazijn extends Model
{
    use HasFactory;

    protected $table = 'magazijn';

    public $timestamps = false;

    protected $fillable = ['ProductId', 'VerpakkingsEenheid', 'AantalAanwezig'];
}