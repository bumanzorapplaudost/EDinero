<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            "Alimentacion",
            "Transporte",
            "Arriendo",
            "Energia Electrica",
            "Acueducto",
            "Internet",
            "Telefono",
            "Television",
            "Netflix",
            "Ropa"
        ];

        foreach ($names as $name) {
            $category = Category::create(["name" => $name]);
        }
    }
}
