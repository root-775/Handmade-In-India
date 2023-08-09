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
        'product_price',
        'product_image',
        'product_flip_image',
        'product_desc_images',
        'product_discount_percentage',
        'product_sku',
        'product_short_description',
        'product_long_description',
        'status',
    ];


    public function categories() {
        return $this->belongsToMany(Category::class, 'product_category', 'product_id','category_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'product_tag');
    }
}
