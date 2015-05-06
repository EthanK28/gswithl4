<?php

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call('BreedsTableSeeder');
        $this->call('CatsTableSeeder');
        $this->call('UsersTableSeeder');

        // $this->call('UserTableSeeder');
    }

}
