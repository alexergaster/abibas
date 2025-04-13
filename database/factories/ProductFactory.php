<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Gender;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'image' => $this->faker->imageUrl(640, 480, 'fashion', true),
            'description' => $this->faker->sentence(10),
            'price' => $this->faker->numberBetween(500, 5000),
            'size' => $this->faker->optional()->randomElement(['S', 'M', 'L', 'XL']),
            'color' => $this->faker->optional()->safeColorName(),

            'category_id' => Category::inRandomOrder()->first()?->id ?? Category::factory(),
            'gender_id'   => Gender::inRandomOrder()->first()?->id ?? Gender::factory(),
            'brand_id'    => Brand::inRandomOrder()->first()?->id ?? Brand::factory(),
        ];
    }
}
