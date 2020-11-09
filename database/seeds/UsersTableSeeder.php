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
                'role_id' => 3,
                'name' => 'Bradley Baldwin',
                'email' => 'test@mail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wwpAqBTR9GHN.MpfmPo83ufmqJVU2OPM5LUrIdgnig5UnvEqCEO2q',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-10-29 11:20:20',
                'updated_at' => '2020-11-07 08:01:41',
            ),
            1 =>
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hJEtZG8HFkIHTkVnNFgck.wWBp7fxVHZeTC4ng4jr80vO4LqMc94e',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-11-05 20:32:32',
                'updated_at' => '2020-11-05 20:32:32',
            ),
            2 =>
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Sarah Peters',
                'email' => 'sarah@mail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6uG/fP054gdkA0GygjOsg.P2Y2NsPP.mWnEEFQdPpRvKPRQ6T.wrC',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-11-06 15:50:54',
                'updated_at' => '2020-11-06 16:40:46',
            ),
            3 =>
            array (
                'id' => 4,
                'role_id' => 2,
                'name' => 'Carol Heath',
                'email' => 'carol@mail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vlRJ34Josq7TT51SrHcmnuUNYOD0XrfQHywfAz/nf9r9VrFQlobnu',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-11-07 08:03:35',
                'updated_at' => '2020-11-07 08:03:35',
            ),4 =>
            array (
                'id' => 5,
                'role_id' => 2,
                'name' => 'Adam Smith',
                'email' => 'adam@mail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vlRJ34Josq7TT51SrHcmnuUNYOD0XrfQHywfAz/nf9r9VrFQlobnu',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-11-07 08:03:35',
                'updated_at' => '2020-11-07 08:03:35',
            ),
            5 =>
            array (
                'id' => 6,
                'role_id' => 2,
                'name' => 'Fiifi Bradford',
                'email' => 'fiifi@mail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vlRJ34Josq7TT51SrHcmnuUNYOD0XrfQHywfAz/nf9r9VrFQlobnu',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-11-07 08:03:35',
                'updated_at' => '2020-11-07 08:03:35',
            ),
        ));


    }
}
