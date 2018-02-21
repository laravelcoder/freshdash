<?php

use Illuminate\Database\Seeder;

class ClinicsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clinics')->delete();
        
        \DB::table('clinics')->insert(array (
            0 => 
            array (
                'id' => 1,
                'clinic_name' => 'denyce clinic',
                'device_count' => 4,
                'clinic_number' => '123456',
                'group_id' => NULL,
                'date_opened' => NULL,
                'quickbase_id' => NULL,
                'quickbase_company' => NULL,
                'created_at' => '2018-02-02 20:33:02',
                'updated_at' => '2018-02-02 20:33:02',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}