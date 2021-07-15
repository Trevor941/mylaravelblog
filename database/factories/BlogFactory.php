<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
    
        return [
            //
            'title'=> $this->faker->sentence(3),
            'slug' =>Str::of($this->faker->sentence(3))->slug('-'),
            'body' => $this->faker->paragraph(300),
            'blog_image' => '',
            'user_id'=> 2


        ];
    }
}
