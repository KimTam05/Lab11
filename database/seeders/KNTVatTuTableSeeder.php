<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker; 

class KNTVatTuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table("kntvattu")->insert([
        //     "KNTMaVT" => "DD01",
        //     'KNTTenVT' => 'Đầu DVD Hitachi 1 cửa',
        //     'KNTDvtinh'=> 'Bộ',
        //     'KNTPhantram'=> 40,
        // ]);

        $faker = Faker::create();
        foreach( range(1, 100) as $index){
            DB::table('kntvattu')->insert([
                'KNTMaVT'=> substr($faker->uuid(),1,4),
                'KNTTenVT'=> $faker->name(),
                'KNTDVTinh'=> substr($faker->sentence(5),0, 10),
                'KNTPhantram'=> $faker->numberBetween(1,100),
            ]);

        }
    }
}
