<?php

use Illuminate\Database\Seeder;

class FestivalsData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Festival::class, rand(10, 35))->create();
    }
}
