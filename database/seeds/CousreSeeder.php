<?php

use Illuminate\Database\Seeder;

class CousreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Course::class, 30)->create();
    }
}
