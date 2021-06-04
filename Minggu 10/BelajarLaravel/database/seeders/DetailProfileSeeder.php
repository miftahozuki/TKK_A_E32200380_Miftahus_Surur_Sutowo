<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke tabel pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Situbondo',
            'nomor_tlp' => '6289652150707',
            'ttl' => '2001-11-21',
            'foto' => 'picture.png',
        ]);
    }
}
