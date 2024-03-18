<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergeen extends Model
{
    use HasFactory;


    protected $table = 'allergeen';

    public $timestamps = false;

    protected $fillable = ['Naam'];
    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'productperallergeen', 'allergeen_id', 'product_id');
    }
}