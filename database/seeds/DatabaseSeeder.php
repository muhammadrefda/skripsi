<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(ChaptersTableSeeder::class);
        $this->call(DailyTestsTableSeeder::class);
        $this->call(ScoresTableSeeder::class);
        $this->call(AnswerStudentTableSeeder::class);

    }
}
