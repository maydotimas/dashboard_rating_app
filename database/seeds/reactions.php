<?php

use Illuminate\Database\Seeder;
use Faker;
use App\Reaction;

class reactions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 1; $i <= 10000 ; $i++) {
            array_push($data, [
                'mobile_id'     => $faker->numberBetween(1,1000),
                'lat'     => $faker->numberBetween(1,1000),
                'long'     => $faker->numberBetween(1,1000),
                'reaction'    => $faker->randomElement(['VG','G','O','VP']),
                'created_at' => $faker->dateTimeBetween('-1 years','+1 month'),
            ]);
        }
        Reaction::insert($data);
    }
}
