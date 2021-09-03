<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->unique()->sentence(mt_rand(3,8)),
            'slug'=> $this->faker->unique()->slug(),
            'excerpt'=> $this->faker->paragraph(),
            // 'body'=> '<p>'.implode('</p><p>',$this->faker->paragraphs(mt_rand(40,200))).'</p>',
            'body'=>collect($this->faker->paragraphs(mt_rand(10,20)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'user_id'=>mt_rand(1,5),
            'category_id'=>mt_rand(1,4)
        ];
    }
}
