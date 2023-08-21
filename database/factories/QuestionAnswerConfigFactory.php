<?php

namespace Database\Factories;

use App\Models\QuestionAnswerConfig;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class QuestionAnswerConfigFactory extends Factory
{
    protected $model = QuestionAnswerConfig::class;

    public function definition(): array
    {
        return [
            'paddingTop' => 1.5,
            'paddingBottom' => 1.5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
