<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price', 'quantity','product_type_id'];

    use HasFactory;

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }
}
