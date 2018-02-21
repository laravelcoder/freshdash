<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('profiles')->delete();
        
        \DB::table('profiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'photo' => NULL,
                'first_name' => 'phillip',
                'last_name' => 'madsen',
                'uuid' => NULL,
                'about_me' => NULL,
                'company' => NULL,
                'gender' => NULL,
                'phone' => NULL,
                'mobile' => NULL,
                'work' => NULL,
                'other' => NULL,
                'is_published' => 1,
                'is_active' => 1,
                'dob' => NULL,
                'skypeid' => NULL,
                'githubid' => NULL,
                'twitter_username' => NULL,
                'instagram_username' => NULL,
                'facebook_username' => NULL,
                'facebook_url' => NULL,
                'linked_in_url' => NULL,
                'google_plus_url' => NULL,
                'slug' => NULL,
                'display_name' => NULL,
                'user_id' => NULL,
                'website_id' => NULL,
                'created_at' => '2018-01-30 00:29:35',
                'updated_at' => '2018-01-30 00:29:35',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}