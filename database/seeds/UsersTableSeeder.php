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
                'name' => 'Phinocio',
                'email' => 'devon.r.mcclure@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8wdwVr4JbicwT7yii6Y0k.u9g4GPY.ZT/mgxksuGO5.UxsGp9.fxC',
                'remember_token' => NULL,
                'created_at' => '2019-12-06 14:18:19',
                'updated_at' => '2019-12-06 14:18:19',
            ),
        ));
        
        
    }
}