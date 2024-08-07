<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prestasi;


class PrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prestasi::create([
            'title' => 'Sepakbola Putri berhasil dimenangkan oleh siswi SMKS Nusantara pada PORPROV III',
            'description' => 'Siswi SMKS Nusantara telah memenangkan kejuaraan sepakbola putri pada Pekan Olahraga Provinsi (PORPROV) III. Keberhasilan ini menunjukkan prestasi yang luar biasa dan komitmen para siswi dalam olahraga sepakbola. Kemenangan ini juga mengangkat nama sekolah dan memberikan kebanggaan kepada seluruh komunitas sekolah.',
            'image_url' => '/images/prestasi/sepakbola.png',
          
        ]);

        Prestasi::create([
            'title' => 'Siswa Berhasil membawa 4 Medali, SMK Nusantara Banyuwangi pada ajang Olimpiade Sciene Competition',
            'description' => 'Para siswa SMK Nusantara Banyuwangi berhasil meraih empat medali dalam ajang Olimpiade Science Competition. Prestasi ini menunjukkan keunggulan akademik dan dedikasi para siswa dalam bidang sains. Keberhasilan ini juga menjadi kebanggaan bagi sekolah dan seluruh komunitas pendidikan di Banyuwangi.',
            'image_url' => '/images/prestasi/untag.png',
           
        ]);

        Prestasi::create([
            'title' => 'Kompetisi Fashion recycle berhasil dimenangkan oleh siswa SMK Nusantara se Kecamatan Bangorejo',
            'description' => 'Siswa SMK Nusantara se-Kecamatan Bangorejo berhasil memenangkan kompetisi fashion recycle. Prestasi ini menunjukkan kreativitas dan kemampuan para siswa dalam mengolah bahan-bahan daur ulang menjadi karya fashion yang menarik dan inovatif. Keberhasilan ini juga menginspirasi dan mengedukasi masyarakat mengenai pentingnya daur ulang dan ramah lingkungan.',
            'image_url' => '/images/prestasi/fashion.png',
           
        ]);
    }
}
