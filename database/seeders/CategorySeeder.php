<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Database\Seeders\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $faker = Faker::create('id_ID');
            for( $i=1; $i <= 10; $i++){
    
                DB::table('categories')->insert([
                    'name'=>$faker->text
                ]);
            }
        }
    }
}
