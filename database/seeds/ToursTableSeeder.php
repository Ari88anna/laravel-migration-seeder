<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Tour;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for($i=0; $i < 8; $i++) {
        $new_tour = new Tour();
        $new_tour->destination = $faker->country();
        $new_tour->days = $faker->numberBetween(5, 20);
        $new_tour->description = $faker->paragraphs(2, true);
        $new_tour->amount = $faker->randomFloat(2, 0, 10000);
        $new_tour->save();
       }
    }
}
