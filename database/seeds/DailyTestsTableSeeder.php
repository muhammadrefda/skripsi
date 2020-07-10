<?php

use Illuminate\Database\Seeder;

class DailyTestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $count = 10;
        factory(\App\DailyTest::class, $count)->create();
    }
}
