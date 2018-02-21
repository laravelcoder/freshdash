<?php

use Illuminate\Database\Seeder;

class AdsclientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('adsclients')->delete();
        
        \DB::table('adsclients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'developer_token' => 'YOUR-DEV-TOKEN',
                'client_customer_id' => 'CLIENT-CUSTOMER-ID',
                'user_agent' => 'YOUR-NAME',
                'client_id' => 'CLIENT-ID',
                'client_secret' => 'CLIENT-SECRET',
                'refresh_token' => 'REFRESH-TOKEN',
                'authorization_uri' => 'https://accounts.google.com/o/oauth2/v2/auth',
                'redirect_uri' => 'urn:ietf:wg:oauth:2.0:oob',
                'token_credential_uri' => 'https://www.googleapis.com/oauth2/v4/token',
                'scope' => 'https://www.googleapis.com/auth/adwords',
                'created_at' => '2018-02-02 20:05:07',
                'updated_at' => '2018-02-02 20:05:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}