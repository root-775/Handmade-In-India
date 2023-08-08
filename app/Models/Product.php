<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_slug',
        'product_brand',
        'product_image_path',
        'product_description',
        'status',
    ];


    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
