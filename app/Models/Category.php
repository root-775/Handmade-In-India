<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'category_slug',
        'category_image_path',
        'category_description',
        'status',
    ];
    public function products() {
        return $this->belongsToMany(Product::class, 'category_product');
    }
}
