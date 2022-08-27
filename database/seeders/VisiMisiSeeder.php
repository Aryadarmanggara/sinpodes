<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visimisi')->insert([
            'visi' => 'Harmonisasi Pelayanan Guna Menuju Masyarakat Sejahtera Berlandaskan Tri Hita Karana',
            'misi' => '1. Meningkatkan Kualitas Pelayanan Kepada Masyarakat Serta Menyelenggarakan Urusan Pemerintahan Desa Secara Terbuka dan Betanggung Jawab Sesuai Dengan Peraturan Perundang-Undangan;

            2. Harmonisasi Hubungan Kelembagaan antara Perbekel dengan Perangkat Desa, antara Perbekel/Desa Dinas dengan Desa Adat, Subak atau Kelompok Masyarakat;
            
            3. Membangun Sistem Perencanaan dan Penganggaran Desa yang Aspiratif dan Partisipatif;
            
            4. Menumbuhkembangkan serta Mendorong Generasi Muda Dalam Meningkatkan Prestasi Dalam Bidang Pendidikan, Olahraga, Seni, Budaya dan Ketenagakerjaan;
            
            5. Menciptakan Lingkungan yang Asri dan Nyaman serta Meningkatkan Pelayanan Kebersihan Desa;
            
            6. Mengelola Potensi dan Aset Desa Untuk Meningkatkan Perekonomian dengan Membangun Kelembagaan Ekonomi Lokal yang Mandiri dan Produktif, serta
            
            7. Meningkatkan Mutu Kesejahteraan Masyarakat untuk Mencapai Taraf Kehidupan yang Lebih Baik Sehingga Menjadi Desa yang Maju dan Mandiri.'
        ]);
    }
}
