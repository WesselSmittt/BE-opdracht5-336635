<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    public $timestamps = false;

    protected $fillable = ['Barcode', 'Naam', 'Allergeen'];
    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'productperallergeen', 'allergeen_id', 'product_id');
    }
}