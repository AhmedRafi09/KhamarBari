<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'prod_name', 
      'qty_or_wt',
      'price',
      'img_url',
      'category'
    ];
}
