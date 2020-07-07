<?php

use Illuminate\Database\Seeder;

class GirlTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Girl::truncate();
        \App\Service::truncate();

        factory(\App\Girl::class, 100)->create()->each(function ($girl){
            factory(\App\Service::class)->create([
                'girl_id' => $girl->id,
            ]);
        });
    }
}
