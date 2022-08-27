<?php

namespace Database\Seeders;

use App\Models\SejarahDesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SejarahDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sejarah')->insert([
            'judul' => 'Sejarah Desa Keramas',
            'deskripsi' => 'Sungguh merupakan hal yang sulit untuk dapat mengetahui secara pasti tanggal,bulan dan tahun berapa Desa Keramas ini didirikan. Memang ada sebuah catatan berupa Raja Purana I Gusti Agung yang memberikan gambaran tentang latar belakang Desa ini bernama Keramas. Berkiblat dari Raja Purana I Gusti Agung tersebut dapat diuraikan sebagai berikut :
            Keramas yang dikenal kini pada mulanya bernama Karamas yang berarti cahaya ( kara ) mas.Uraian selanjutnya mengatakan bahwa ketika I Gusti Agung Maruti berontak terhadap Dalem Di Made di Gelgel pada kurang lebih tahun M.1660,pemberontakan mana berhasil mengangkat I Gusti Agung Maruti untuk menduduki tahta kerajaan Gelgel sejak tahun M.1660 itu dan Dalem Di Made mengungsi ke Guliang.Pada kira-kira th M.1686,Dalem Di Made wafat di Guliang.Setahun setelah itu putra beliau yang bernama I Dewa Agung Jambe memerintahkan paman beliau yang bernama I Gusti Jambe,yang juga ipar I Gusti Agung Maruti guna merebut kembali tahta kerajaan Gelgel yang telah di pegang selama 27 tahun oleh I Gusti Agung Maruti.I Gusti Jambe berangkat dengan segenap laskar. I Dewa Agung Jambe dan karena pada hakekatnya antara I Gusti Agung Maruti terdapat hubungan ipar dengan I Gusti Jambe,maka perang tanding yang terjadi di antara mereka mengakibatkan keduanya gugur pada medan di Cedokan Oga.Putra I Gusti Agung Maruti yaitu I Gusti Agung Putu Agung,I Gusti Agung Made Agung dan I Gusti Agung Ratih,menyingkir ke Jimbaran.Atas keuletan perjuangan mereka dan atas prakarsa I Gusti Agung Putu Agung sebagai saudara tertua menyebabkan I Gusti Agung Made Agung bertahta di Mengwi dan I Gusti Agung Putu Agung yang suka menyendiri dan bersemadi,pada suatu malam menemukan sebuah tempat yang bercahaya gemerlapan seperti emas.Tempat ini adalah Pura Masceti dan kemudian beliau mendapat ilham agar beliau menetap di sebelah utara tempat yang bercahaya keemasan ini.Tempat inilah pada akhirnya bernama Karamas.Selanjutnya dikenal sekarang dengan nama Keramas'
        ]);
    }
}
