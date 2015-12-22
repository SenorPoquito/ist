<?php

use Illuminate\Database\Seeder;

class WardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Uncomment the below to wipe the table clean before populating
        DB::table('areas')->delete();

        $wards = array(
            [
              'id' => 1,
              'name' => 'Chuo',
              'slug' => 'chuo',
            ],
            [
              'id' => 2,
              'name' => 'Minato',
              'slug' => 'minato',
            ],
            [
              'id' => 3,
              'name' => 'Chiyoda',
              'slug' => 'chiyoda',
            ],
            [
              'id' => 4,
              'name' => 'Shinjuku',
              'slug' => 'shinjuku',
            ],


        );

        // Uncomment the below to run the seeder
        DB::table('areas')->insert($wards);
    }
}
