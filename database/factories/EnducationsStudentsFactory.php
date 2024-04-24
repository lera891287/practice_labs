<?php

namespace Database\Factories;

use App\Models\Enducations;
use App\Models\EnducationsStudents;
use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EnducationsStudents>
 */
class EnducationsStudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = EnducationsStudents::class;

    public function definition(): array
    {
        return [
            'enducations_id'=> rand(1,50),
            'students_id'=> rand(1,50),
//            'grad'=> rand(1,5),
        ];
    }
}
