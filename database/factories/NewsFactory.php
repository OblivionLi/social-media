<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraphs(rand(3, 10), true),
            'image' => 'https://picsum.photos/600/400',
            'reading_time' => rand(1, 10),
            'views' => rand(100, 1000),
            'user_id' => User::factory()->create()->id,
            'category_id' => Category::factory()->create()->id,
        ];
    }

    /**
     * Indicate that the news belongs to a user.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Indicate that the news belongs to a category.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
