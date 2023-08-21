<?php

namespace Database\Factories;

use App\Models\QuestionAnswer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class QuestionAnswerFactory extends Factory
{
    protected $model = QuestionAnswer::class;

    public function definition(): array
    {
        return [
            'Question' => $this->faker->realText(50),
            'Answer' => $this->faker->realText(150),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
