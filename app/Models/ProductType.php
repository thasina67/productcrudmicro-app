<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_types';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description'];

    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
