<?php

use Illuminate\Database\Seeder;

class AnalyticsclientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('analyticsclients')->delete();
        
        \DB::table('analyticsclients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'clinic_id' => NULL,
                'view_id' => 128721343,
                'view_url' => 'www.liceclinicscleveland.com',
                'created_at' => '2018-02-02 20:23:51',
                'updated_at' => '2018-02-02 20:23:51',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}