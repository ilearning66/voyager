<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class BannerTestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('banner_test')->delete();
        //
        foreach ( range(1,2) as $index )
        {
            
             App\BannerTest::create(
                [
                    'banner_id' => $index,
                    'test_id' => $index,
                ]
             );
            
            
        }
    }
}
