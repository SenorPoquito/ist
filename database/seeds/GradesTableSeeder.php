<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Uncomment the below to wipe the table clean before populating
        DB::table('grades')->delete();

        $grades = array(
            [
              'id' => 1,
              'name' => 'Pre-K',
              'slug' => 'pre-k',
            ],
            [
              'id' => 2,
              'name' => 'Elementary',
              'slug' => 'elementary',
            ],
            [
              'id' => 3,
              'name' => 'Junior High',
              'slug' => 'junior-high',
            ],
            [
              'id' => 4,
              'name' => 'High School',
              'slug' => 'high-school',
            ],


        );

        // Uncomment the below to run the seeder
        DB::table('grades')->insert($grades);
    }
}
