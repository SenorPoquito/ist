<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Uncomment the below to wipe the table clean before populating
        DB::table('schools')->delete();

        $schools = array(
            ['id' => 1, 'name' => 'School 1'],
            ['id' => 2, 'name' => 'School 2'],
            ['id' => 3, 'name' => 'School 3'],
            ['id' => 4, 'name' => 'School 4'],
            ['id' => 5, 'name' => 'School 5'],
            ['id' => 6, 'name' => 'School 6'],
            ['id' => 7, 'name' => 'School 7'],

        );

        // Uncomment the below to run the seeder
        DB::table('schools')->insert($schools);
    }
}
