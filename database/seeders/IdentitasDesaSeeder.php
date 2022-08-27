<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentitasDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('identitas')->insert([
            'nama_desa' => 'Keramas',
            'nama_kecamatan' => 'Blahbatuh',
            'kabupaten' => 'Gianyar',
            'provinsi' => 'Bali',
            'kode_pos' => '80581',
            'alamat' => 'Jl. Maruti No.1',
            'nama_kepala_desa' => 'I Gusti Putu Sarjana',
            'image' => 'foto.jpg',
            'instagram' => 'www.instagram.com',
            'facebook' => 'wwww.facebook.com',
            'twitter' => 'www.teitter.com',
        ]);
    }
}
