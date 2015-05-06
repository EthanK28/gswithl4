<?php

class CatsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cats')->insert(array(
            array('id' => 1, 'name' => 'dog1', 'date_of_birth' => '2012-01-01',
                'breed_id' => 1, 'created_at' => '2012-04-04', 'updated_at' => '2012-04-04'),

        ));
    }
}