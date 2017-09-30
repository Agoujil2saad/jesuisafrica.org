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
                'name' => 'youssef',
                'email' => 'ussef.ch@gmail.com',
                'password' => bcrypt('123456'),
                'remember_token' => 'oumHL8oxmj6WhLNralZYDL6y9ZtaX7OLYUVLNzEeIEtQSRfdbhl1VVpPcElU',
                'created_at' => '2017-09-30 20:16:14',
                'updated_at' => '2017-09-30 20:16:14',
            ),
        ));
        
        
    }
}