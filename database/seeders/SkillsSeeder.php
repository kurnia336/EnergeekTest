<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\Skills;
use DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['name'=>'Laravel', 
            'created_by' => 1,
            'updated_by' => NULL,
            'deleted_by' => NULL,
            'created_at' => NOW(),
            'updated_at' => NULL,
            'deleted_at' => NULL,],

            ['name'=>'Wordpress', 
            'created_by' => 1,
            'updated_by' => NULL,
            'deleted_by' => NULL,
            'created_at' => NOW(),
            'updated_at' => NULL,
            'deleted_at' => NULL,],

            ['name'=>'Code Igniter', 
            'created_by' => 1,
            'updated_by' => NULL,
            'deleted_by' => NULL,
            'created_at' => NOW(),
            'updated_at' => NULL,
            'deleted_at' => NULL,],

            ['name'=>'Bootstraps', 
            'created_by' => 1,
            'updated_by' => NULL,
            'deleted_by' => NULL,
            'created_at' => NOW(),
            'updated_at' => NULL,
            'deleted_at' => NULL,]
           
            //...
        ];

        DB::table('skills')->insert($data);
    }
}
