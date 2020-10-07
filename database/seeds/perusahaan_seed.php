<?php

use Illuminate\Database\Seeder;

class perusahaan_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_perusahaan')->insert([
            'id'=>'1',
            'email' => 'test@gmail.com',
            'password' => Hash::make('123empatlima'),
        ]);
    }
}
