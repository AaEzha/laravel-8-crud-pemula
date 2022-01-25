<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul'     => $this->faker->sentence(4),
            'penulis'   => $this->faker->name(),
            'tahun'     => $this->faker->year(),
            'sinopsis'  => $this->faker->paragraph()
        ];
    }
}
