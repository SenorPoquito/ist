<?php

use Illuminate\Database\Seeder;

class GradesSchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $gradesSchools = array(
          [
            'id' => 1,
            'age_id' => 1,
            'school_id' => 1,
          ],
          [
            'id' => 2,
            'age_id' => 2,
            'school_id' => 1,
          ],
          [
            'id' => 3,
            'age_id' => 1,
            'school_id' => 2,
          ],
          [
            'id' => 4,
            'age_id' => 1,
            'school_id' => 3,
          ],[
            'id' => 5,
            'age_id' => 1,
            'school_id' => 4,
          ],[
            'id' => 6,
            'age_id' => 1,
            'school_id' => 5,
          ]

      );

        DB::table('age_school')->insert($gradesSchools);
    }
}
