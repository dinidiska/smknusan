<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run()
    {
        News::create([
            'title' => 'Expo Karya Gemilang SMK Nusantara Banyuwangi berjalan lancar dan meriah',
            'description' => 'Expo Karya Gemilang SMK Nusantara adalah sebuah acara yang diadakan oleh SMK Nusantara untuk memamerkan hasil karya, inovasi, dan prestasi para siswa sekolah tersebut. Acara ini biasanya bertujuan untuk menunjukkan kemampuan dan kreativitas siswa dalam berbagai bidang seperti teknologi, seni, dan keterampilan praktis. Selain itu, expo ini juga menjadi ajang untuk memperkenalkan sekolah kepada masyarakat luas, menarik calon siswa baru, dan menjalin hubungan dengan industri atau perusahaan yang mungkin tertarik dengan karya siswa SMK Nusantara.',
            'image_url' => '/images/expo.png',
           
        ]);

        News::create([
            'title' => 'Ecoprint Totebag menjadi kegiatan Prakarya bagi Siswa dan bisa membuka peluang usaha',
            'description' => 'Eco print totebag karya siswa SMK Nusantara adalah tas yang dibuat menggunakan teknik eco print, yang merupakan metode pencetakan alami menggunakan daun, bunga, dan bahan-bahan organik lainnya untuk menciptakan pola dan desain pada kain. Teknik ini ramah lingkungan karena tidak menggunakan bahan kimia berbahaya dan memanfaatkan sumber daya alam yang ada di sekitar.',
            'image_url' => '/images/eco.png',
          
        ]);

        News::create([
            'title' => 'Lomba Cerdas yang diadakan oleh Mahasiswa Kampus Mengajar yakni Festival Literasi Numerasi',
            'description' => 'Lomba cerdas cermat di event Festival Literasi Numerasi di SMK Nusantara adalah sebuah kompetisi yang menguji pengetahuan dan keterampilan siswa dalam bidang literasi dan numerasi. Festival ini bertujuan untuk meningkatkan kemampuan siswa dalam membaca, menulis, dan berhitung serta mendorong minat mereka dalam belajar melalui kompetisi yang menyenangkan dan menantang.',
            'image_url' => '/images/cerdas.png',
           
        ]);

        News::create([
            'title' => 'Dalam Rangka Kegiatan Festival Literasi Numerasi, Siswa membuat mahakarya kreatif',
            'description' => 'Membuat karya seni kubus Asmaul Husna, mading, dan poster edukatif pada Festival Literasi Numerasi di SMK Nusantara adalah bagian dari rangkaian kegiatan yang bertujuan untuk mengembangkan kreativitas siswa sekaligus meningkatkan pemahaman mereka terhadap literasi dan numerasi.',
            'image_url' => '/images/kreatif.png',
          
        ]);

        News::create([
            'title' => 'Hasil Karya Siswa pada Festival Literasi Numerasi dengan menyelenggarakan Pameran',
            'description' => 'Pameran karya di Festival Literasi Numerasi di SMK Nusantara adalah acara di mana hasil-hasil kreativitas siswa dipajang untuk dilihat oleh siswa lain, guru, orang tua, dan masyarakat umum. Pameran ini bertujuan untuk menunjukkan berbagai proyek dan karya yang telah dibuat oleh siswa dalam rangka festival, serta untuk merayakan dan mengapresiasi pencapaian mereka dalam bidang literasi dan numerasi.',
            'image_url' => '/images/pameran.png',
           
        ]);

        News::create([
            'title' => 'Senam Sehat Diikuti oleh Seluruh Warga Sekolah Guna Menjaga Imunitas Tubuh',
            'description' => 'Senam Sehat di SMK Nusantara adalah kegiatan yang bertujuan untuk meningkatkan kesehatan dan kebugaran fisik siswa melalui gerakan senam yang terstruktur dan terkoordinasi.',
            'image_url' => '/images/senam.png',
            
        ]);
    }
}
