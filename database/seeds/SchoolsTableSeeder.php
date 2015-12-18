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
            [
              'id' => 1,
              'name' => 'IREP International School',
              'slug' => 'irep-international-school',
              'description' => 'This form allows you to generate random text strings. The randomness comes from atmospheric noise, which for many purposes is better than the pseudo-random number algorithms typically used in computer programs.',
              'city' => 'Tokyo',
              'ward_id' => 1,
              'genders' => 'Coed',
              // 'grades_id' => 1,
              'programFees' => 'Preschool ¥1,200,000',
              'address' => '東京中央区日本橋大伝馬町13-6',
              'otherFees' => 'Registration Fee : ¥100,000',
              ],
              [
                'id' => 2,
                'name' => 'Localio School for Kids',
                'slug' => 'localio-school-for-kids',
                'description' => 'This form allows you to generate random text strings. The randomness comes from atmospheric noise, which for many purposes is better than the pseudo-random number algorithms typically used in computer programs.',
                'city' => 'Tokyo',
                'ward_id' => 1,
                'genders' => 'Coed',
                // 'grades_id' => 1,
                'programFees' => 'Preschool ¥1,200,000',
                'address' => '東京中央区日本橋大伝馬町13-6',
                'otherFees' => 'Registration Fee : ¥100,000',
              ],
              [
                'id' => 3,
                'name' => 'RP Happy School',
                'slug' => 'rp-happy-school',
                'description' => 'This form allows you to generate random text strings. The randomness comes from atmospheric noise, which for many purposes is better than the pseudo-random number algorithms typically used in computer programs.',
                'city' => 'Tokyo',
                'ward_id' => 1,
                'genders' => 'Coed',
                // 'grades_id' => 1,
                'programFees' => 'Preschool ¥1,200,000',
                'address' => '東京中央区日本橋大伝馬町13-6',
                'otherFees' => 'Registration Fee : ¥100,000',
              ],
              [
                'id' => 4,
                'name' => 'Hakuhodo Elementary',
                'slug' => 'hakuhodo-elementary',
                'description' => 'This form allows you to generate random text strings. The randomness comes from atmospheric noise, which for many purposes is better than the pseudo-random number algorithms typically used in computer programs.',
                'city' => 'Tokyo',
                'ward_id' => 1,
                'genders' => 'Coed',
                // 'grades_id' => 1,
                'programFees' => 'Preschool ¥1,200,000',
                'address' => '東京中央区日本橋大伝馬町13-6',
                'otherFees' => 'Registration Fee : ¥100,000',
                ],

        );
        // Uncomment the below to run the seeder
        DB::table('schools')->insert($schools);
    }
}
