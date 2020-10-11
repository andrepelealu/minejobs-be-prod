<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class provinsi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $file = __DIR__.'/provinsi.csv';
        $header = ['id', 'name', 'lat', 'long'];
        $delimiter = ',';

        $provinsi = [];
        if (($handle = fopen($file, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                $provinsi[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        $provinsi = array_map(function ($arr) use ($now) {
            $arr['meta'] = json_encode(['lat' => $arr['lat'], 'long' => $arr['long']]);
            unset($arr['lat'], $arr['long']);

            return $arr + ['created_at' => $now, 'updated_at' => $now];
        }, $provinsi);

        DB::table('provinsi')->insert($provinsi);
    }
}
