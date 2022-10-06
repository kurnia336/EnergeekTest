<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 10; $i++){
 
          DB::table('jobs')->insert([
              'name' => $faker->jobTitle,
              'created_by' => 1,
              'updated_by' => NULL,
              'deleted_by' => NULL,
              'created_at' => NOW(),
              'updated_at' => NULL,
              'deleted_at' => NULL,

          ]);

      }
    }
}
