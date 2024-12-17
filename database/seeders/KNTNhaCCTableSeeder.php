<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class KNTNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,100) as $index) {
            DB::table("kntnhacc")->insert([
                'KNTManhacc' => str::random(3),
                'KNTTennhacc' => $faker->name(),
                'KNTDiachi' => $faker->address(),
                'KNTDienthoai' => $faker->phoneNumber(),
                'kntemail'=> $faker->email(),
                'kntstatus'=> $faker-> boolean(),
            ]);
        }
    }
}
