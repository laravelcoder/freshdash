<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Phillip Madsen',
                'email' => 'wecodelaravel@gmail.com',
                'username' => 'phillipmadsen',
                'password' => '$2y$10$67pP9tKVhQDyJ/ZJzo5rgOpQnrPlPXwsajnA0MZq..LgVbd/aNsqK',
                'confirmation_code' => 'lkdjfownfnosodhf',
                'confirmed' => 1,
                'admin' => 1,
                'remember_token' => 'HkPd6o8SupNzNfqx0lTCqZKitLkiUMjujLVd8LrHGJvBZ4xx5CclqYY0sndR',
                'created_at' => '2017-11-21 21:22:39',
                'updated_at' => '2017-11-21 21:22:39',
                'deleted_at' => NULL,
                'profile_id' => factory(App\Models\Profile::class)->create()->id,
            ),
        ));

    }
}