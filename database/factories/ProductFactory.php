<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->title();
        return [
            'product_name' => $title,
            'product_slug' => Str::slug($title),
            'product_brand' => fake()->word(),
            'product_image_path' => 'https://dummyimage.com/350/ffffff/000000',
            'product_description' => fake()->paragraph(),
            'status' => 1
        ];
    }
}
