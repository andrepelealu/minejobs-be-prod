<?php

use Illuminate\Database\Seeder;

class kandidat_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_kandidat')->insert([
            'id'=>'1',
            'email' => 'test@gmail.com',
            'password' => Hash::make('123empatlima'),
        ]);
    }
}
