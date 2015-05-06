<?php

/**
 * Created by PhpStorm.
 * User: Eunseok
 * Date: 2015-05-05
 * Time: 오후 10:49
 */
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create(array(
            'username' => 'admin', 'password' => Hash::make('hunter2'),
            'is_admin' => true));

        User::create(array(
            'username' => 'scott', 'password' => Hash::make('tiger'),
            'is_admin' => false));

    }
}