<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;


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
        $body = collect($this->faker->paragraphs(mt_rand(10, 20)))
            ->map(fn ($p) => "<p>$p</p>")
            ->implode('');
        $title = $this->faker->unique()->sentence(mt_rand(3, 8));

        return [
            'title' => $title,
            'slug' => SlugService::createSlug(Post::class, 'slug', $title),
            'excerpt' => Str::limit(strip_tags($body), 200, '...'),
            'body' => $body,
            'user_id' => mt_rand(1, 5),
            'category_id' => mt_rand(1, 4)
        ];
    }
}
