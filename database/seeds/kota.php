<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class kota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $file = __DIR__.'/kota.csv';
        $header = ['id', 'province_id', 'name', 'lat', 'long'];
        $delimiter = ',';

        $kota = [];
        if (($handle = fopen($file, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                $kota[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        $kota = array_map(function ($arr) use ($now) {
            $arr['meta'] = json_encode(['lat' => $arr['lat'], 'long' => $arr['long']]);
            unset($arr['lat'], $arr['long']);

            return $arr + ['created_at' => $now, 'updated_at' => $now];
        }, $kota);

        $collection = collect($kota);
        foreach ($collection->chunk(50) as $chunk) {
            DB::table('kota')->insert($chunk->toArray());
        }
    }
}
