<?php

use Illuminate\Database\Seeder;

class iklan_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iklan_perusahaan')->insert([
            "id_perusahaan"=>"1",
            "posisi_pekerjaan"=>"posisi pekerjaan",
            "gaji_min"=>"1000000",
            "gaji_max"=>"3000000",
            "provinsi"=>"jawa tengah",
            "kota"=>"semarang",
            "bidang_pekerjaan"=>"teknologi",
            "tingkat_pendidikan"=>"sma",
            "pengalaman_kerja"=>"3 tahun",
            "persyaratan"=>"test",
            "benefit_perusahaan"=>"benefit",
            "url_header"=>"google.com"
        ]);
    }
}
