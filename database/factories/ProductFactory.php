<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name=$this->faker->text(25);
        $price=$this->faker->numberBetween($min=100,$max=900);
        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'image'=>$this->faker->imageUrl($width=140,$height=300),
            'description'=>$this->faker->text(100),
            'color'=>$this->faker->hexcolor(),
            'size'=>$this->faker->text(6),
            'price'=>$price,
            'remise'=>$price-50,
            'stock'=>$this->faker->numberBetween($min=1,$max=1000),
            'category_id'=>Category::factory(),

        ];
    }
}
