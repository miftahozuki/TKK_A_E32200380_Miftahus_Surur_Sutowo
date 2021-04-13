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
            'address' => 'Jember',
            'nomor_tlp' => '08xxxxxxx',
            'ttl' => '2000-11-26',
            'foto' => 'picture.png',
        ]);
    }
}
