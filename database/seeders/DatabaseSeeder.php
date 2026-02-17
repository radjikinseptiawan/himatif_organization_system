<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\Departemen;
use App\Models\Events;
use App\Models\Galeri;
use App\Models\Misi;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Contracts\EventDispatcher\Event;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'email' => 'adammubarok@gmail.com',
            'password' => 'aji12345',
        ]);

        Anggota::insert([
            [
                "nama_anggota" => "Muhammad Hasbiallah",
                "jabatan_anggota" => "Ketua Umum 2025/2026",
                "departemen_anggota" => "penjamin_mutu",
                "foto_anggota" => "/anggota/hasbi.jpeg"
            ],
            [
                "nama_anggota" => "Bayu Maulana Ayassy",
                "jabatan_anggota" => "Wakil Ketua Umum 2025/2026",
                "departemen_anggota" => "penjamin_mutu",
                "foto_anggota" => "/anggota/bayu.jpeg"    
            ],
            [
                "nama_anggota" => "Adam Mubarok",
                "jabatan_anggota" => "Ketua Umum",
                "departemen_anggota"=>"pengurus_inti",
                "foto_anggota" => "/anggota/Adam Mubarok - Ketua Umum.jpg"
            ],
            [
                "nama_anggota" => "Fahrul Rozi Fahreza",
                "jabatan_anggota" => "Wakil Ketua Umum",
                "departemen_anggota"=>"pengurus_inti",
                "foto_anggota" => "/anggota/Fahrul Rozi Pratama  - Wakil Ketua Umum.jpg"
                ],
            [
                "nama_anggota" => "Imam Permana",
                "jabatan_anggota" => "Sekertaris Umum 1",
                "departemen_anggota"=>"pengurus_inti",
                "foto_anggota" => "/anggota/Imam Permana - Sekertaris Umum 1.jpg"
            ],
            [
                "nama_anggota" => "Zizantara Arzeva Cakra Kahana",
                "jabatan_anggota" => "Sekertaris Umum 2",
                "departemen_anggota"=>"pengurus_inti",
                "foto_anggota" => "/anggota/Zizantara Arzeva Cakra Kahana - Sekertaris Umum 2.jpg"
            ],
           [
                "nama_anggota" => "Nabilio Sawares",
                "jabatan_anggota" => "Bendahara Umum",
                "departemen_anggota"=>"pengurus_inti",
                "foto_anggota" => "/anggota/Nabilio Sawares - Bendahara Umum.jpg"
            ],
           [
                "nama_anggota" => "Ahyar",
                "jabatan_anggota" => "Ketua Departemen",
                "departemen_anggota"=>"departemen_po",
                "foto_anggota" => "/anggota/Ahyar - PO.jpg"
            ],           [
                "nama_anggota" => "Adelia Nilawati",
                "jabatan_anggota" => "Sekertaris Departemen",
                "departemen_anggota"=>"departemen_po",
                "foto_anggota" => "/anggota/Adelia Nilawati.jpg"
            ],
            [
                "nama_anggota" => "Youvanda Maysha Cahya Poernama",
                "jabatan_anggota" => "Ketua Departemen",
                "departemen_anggota"=>"departemen_medkominfo",
                "foto_anggota" => "/anggota/Youvanda Mahsya - MEDKOMINFO.jpg"
            ],
            [
                "nama_anggota" => "Irfan Gunawan Pratama",
                "jabatan_anggota" => "Sekertaris Departemen",
                "departemen_anggota"=>"departemen_medkominfo",
                "foto_anggota" => "/anggota/Irfan Gunawan Pratama - MEDKOMINFO.jpg"
            ],
            [
                "nama_anggota" => "Muhammad Suhada",
                "jabatan_anggota" => "Ketua Departemen",
                "departemen_anggota"=>"departemen_miba",
                "foto_anggota" => "/anggota/Muhammad Suhada - MIBA.jpg"
            ],
            [
                "nama_anggota" => "Khusnul Khotimah",
                "jabatan_anggota" => "Sekertaris Departemen",
                "departemen_anggota"=>"departemen_miba",
                "foto_anggota" => "/anggota/Khusnul Khotimah - MIBA.jpg"
            ],
            [
                "nama_anggota" => "Radjikin Septiawan",
                "jabatan_anggota" => "Ketua Departemen",
                "departemen_anggota"=>"departemen_litbang",
                "foto_anggota" => "/anggota/Radjikin Septiawan - LITBANG.jpg"
            ],
            [
                "nama_anggota" => "Ari Cakra Kurniawan",
                "jabatan_anggota" => "Sekertaris Departemen",
                "departemen_anggota"=>"departemen_litbang",
                "foto_anggota" => "/anggota/Ari Cakra Kurniawan - LITBANG.jpg"
            ],
            [
                "nama_anggota" => "Felix Amon Sitinjak",
                "jabatan_anggota" => "Ketua Departemen",
                "departemen_anggota"=>"departemen_hubineks",
                "foto_anggota" => "/anggota/Felix Amon Sitinjak - HUBINEKS.jpg"
            ],
            [
                "nama_anggota" => "Gilang Febriansyah",
                "jabatan_anggota" => "Sekertaris Departemen",
                "departemen_anggota"=>"departemen_hubineks",
                "foto_anggota" => "/anggota/Gilang Febriansyah - HUBINEKS.jpg"
            ],
        ]);

        Departemen::insert(
            [
            [
                "nama_departemen" => "Penjamin Mutu",
                "visi_departemen" => "Menjadikan sistem penjaminan mutu HIMATIF sebagai landasan utama dalam menciptakan organisasi yang profesional, terukur, transparan, dan berkelanjutan",
                "abbreviation" => "penjamin_mutu",
                "lambang_departemen" => null
            ],
            [
                "nama_departemen" => "Pengurus Inti",
                "visi_departemen" => "Menjadikan Himpunan Mahasiswa Teknik Universitas Pelita Bangsa sebagai organisasi yang profesional, inovatif, berintegritas, sertamampu menjadi wadah pengembangan kompetensi dna aspirasi mahasiswa Teknik Informatila di era digital",
                "abbreviation" => "pengurus_inti",
                "lambang_departemen" => null
            ]
            ,
            [
            "nama_departemen" => "Departemen Penelitian dan Pengembangan",
            "visi_departemen" => "Menjadi departemen yang aktif, progresif, dan berdampak dalam mengembangkan potensi mahasiswa Teknik Informatika Universitas Pelita Bangsa yang kritis, solutif, kreatif, dan inovatif melalui program kerja yang selaras dengan Tri Dharma Perguruan Tinggi.",
            "abbreviation" => "departemen_litbang",
            "lambang_departemen" => "/logo/litbang.png"
            ],
            [
            "nama_departemen" => "Departemen Pengembangan Organisasi",
            "visi_departemen" => "Mewujudkan Himatif sebagai sarana pengembangan diri mahasiswa Teknik Informatika secara pemikiran dan Tindakan yang mengedepankan nilai-nilai kesadaran dan kepedulian.",
            "abbreviation" => "departemen_po",    
            "lambang_departemen" => "/logo/po_logo.png"
            ],
            [
            "nama_departemen" => "Departemen Media Komunikasi dan Informasi",
            "visi_departemen" => "Menjadi departemen yang profesional dan inovatif dalam mengelola media komunikasi dan informasi untuk meningkatkan citra dan kontribusi Himatif di lingkungan kampus dan masyarakat.",
            "abbreviation" => "departemen_medkominfo",
            "lambang_departemen" => "/logo/medkominfo.png"     
            ],
            [
            "nama_departemen" => "Departemen Minat dan Bakat",
            "visi_departemen" => "Menjadikan Himatif-Univ Pelita Bangsa wadah yang inspiratif dan unggul dalam mengembangkan kreativitas, minat, dan bakat guna mencetak insan yang berprestasi dan inovatif dalam bidang akademik maupun non akademik.",
            "abbreviation" => "departemen_miba",    
            "lambang_departemen" => "/logo/miba_logo.png" 
            ],
            [
            "nama_departemen" => "Departemen Hubungan Internal dan Eksternal",
            "visi_departemen" => "Menjadikan Departemen Hubin Dan Hubeks yang profesional dan efektif dalam berkomunikasi serta meningkatkan kesadaran dan reputasi organisasi yang sterategis dan kreatif , membangun hubungan yang kuat dan berkelanjutan untuk menjaga citra positif dan nama baik HIMATIF-Univ. Pelita Bangsa.",
            "abbreviation" => "departemen_hubineks",
            "lambang_departemen" => "/logo/hubineks_logo.png"  
            ]
            ]
            );
            
            Misi::insert([
                [
                    "departemen_id" => 1,
                    "misi" => "Mengawal, mengevaluasi, dan memastikan seluruh perencanaan serta pelaksanaan program kerja HIMATIF berjalan sesuai standar operasional, tepat sasaran, dan berorientasi pada peningkatan kualitas organisasi secara berkelanjutan."
                ]
            ]);

            Misi::insert([
                [
                    "departemen_id" => 2,
                    "misi" => "Mewujudkan tata kelola organisasi yang solid, transparan, dan kolaboratif melalui kepemimpinan yang bertanggung jawab, administrasi yang tertib, serta pengelolaan keuangan yang akuntabel guna mendukung program kerja yang berdampak bagi seluruh mahasiswa Teknik Informatika Universitas Pelita Bangsa."
                ],
            ]);

            // Penelitian & Pengembangan
            Misi::insert([
                [
                    "departemen_id" => 3,
                    "misi" => "Merancang dan menjalankan program kerja yang terukur dan berkelanjutan, dengan output yang jelas bagi mahasiswa Teknik Informatika."
                ],
                [
                    "departemen_id" => 3,
                    "misi" => "Meningkatkan partisipasi aktif mahasiswa dalam kegiatandepartemen, bukan hanya sebagai peserta, tetapi juga sebagai pelaksana dan penggerak."
                ],
                [
                    "departemen_id" => 3,
                    "misi" => "Menciptakan sistem kerja departemen yang tertib, transparan, dan kolaboratif, sehingga setiap anggota memahami peran dan tanggung jawabnya."
                ],
                [
                    "departemen_id" => 3,
                    "misi" => "Mendorong budaya diskusi, eksplorasi ide, dan problem solving dalam setiap kegiatan departemen."
                ],
                [
                    "departemen_id" => 3,
                    "misi" => "Menjadikan departemen sebagai ruang aman untuk belajar, gagal, dan berkembang bagi anggota dan mahasiswa Teknik Informatika."
                ],
                
            ]);

              Misi::insert([
                [
                    "departemen_id" => 4,
                    "misi" => "Membuka ruang diskusi yang berorientasi terhadap pengembangan wawasan"
                ],
                [
                    "departemen_id" => 4,
                    "misi" => " Menjalin komunikasi dengan baik dan mempererat hubungan dengan sesama mahasiswa."
                ],
                [
                    "departemen_id" => 4,
                    "misi" => "Meningkatkan motivasi berorganisasi pada Mahasiswa Teknik Informatika"
                ],
                [
                    "departemen_id" => 4,
                    "misi" => "Membangun kolaborasi dengan instansi dan Lembaga sebagai acuan untuk perkembangan organisasi"
                ]                
            ]);


          Misi::insert([
                [
                    "departemen_id" => 5,
                    "misi" => "Mengelola dan mengembangkan media komunikasi dan informasi Himatif yang efektif dan kreatif"
                ],
                [
                    "departemen_id" => 5,
                    "misi" => "Meningkatkan kesadaran dan partisipasi mahasiswa dalam kegiatan Himatif melalui strategi komunikasi yang tepat."
                ],
                [
                    "departemen_id" => 5,
                    "misi" => "Menyediakan informasi yang akurat dan terkini tentang kegiatan Himatif dan perkembangan teknologi informasi."
                ]
            ]);



             Misi::insert([
               [
                    "departemen_id" => 6,
                    "misi" => " Menemukan, mewadahi, dan mengembangkan minat serta bakat mahasiswa khususnya Teknik Informatika, di lingkungan kampus, maupun luar kampus, baik di bidang akademik maupun non-akademik."
                ],
                [
                    "departemen_id" => 6,
                    "misi" => "Menyelenggarakan kegiatan dan program yang relevan, kreatif, serta inovatif untuk meningkatkan potensi dan prestasi mahasiswa."
                ],
                [
                    "departemen_id" => 6,
                    "misi" => "Mendorong kolaborasi, kepemimpinan, dan inovasi mahasiswa sebagai bekal untuk membuka peluang dan berkontribusi di bidangnya."
                ]
            ]);

                      Misi::insert([
                [
                    "departemen_id" => 7,
                    "misi" => "Membangun hubungan dan menjaga relasi secara baik dan berkesinambungan dengan internal atau eksternal."
                ],
                [
                    "departemen_id" => 7,
                    "misi" => " Menigkatkan kesadaran dan partisipasi mahasiswa dalam kegiatan kemahasiswaan melalui komunikasi yang efektif."
                ],
                [
                    "departemen_id" => 7,
                    "misi" => "Membangun dan memelihara hubungan yang kuat dan berkelanjutan dengan Mahasiswa, stakeholder, dosen, ormawa dan masyarakat lainnya."
                ],
                [
                    "departemen_id" => 7,
                    "misi" => "Mengembangkan dan melaksanakan program komunikasi yang berfokus pada kepentingan mahasiswa Teknik Informatika.
"
                ]                
            ]);

            Events::insert([
                [
                    "cover_link" => "/even/oprec_angmud.jpeg",
                    "google_link" => "https://docs.google.com/forms/d/e/1FAIpQLSfGPxasdqpIgSPcqQ_Sfsn9AOC8jaxFF6DKwaSqNa4OFPzQmw/viewform",
                    "judul_event" => "OPEN RECRUITMENT CALON ANGGOTA MUDA HIMATIF PERIODE 2026"
                ]
            ]);

            Galeri::insert([
            [
                "google_link" => "https://drive.google.com/drive/folders/1sndAcVaT4oUUHzUZvkNp5OikCa8RpjsK",
                "cover_link" => "/cover/pelantikan_pengurus.jpg",
                "judul_album" => "Pelantikan ORMAWA UPB 2026/2027"
            ],
            [
                "google_link" => "https://drive.google.com/drive/folders/1U00Iw0wpX3QqPaE7naUGYajqVizRbDRR",
                "cover_link" => "/cover/MOP.jpg",
                "judul_album" => "Masa Orientasi Pengurus 2026/2027"    
            ],
            [
                "google_link" => "https://drive.google.com/drive/folders/1U00Iw0wpX3QqPaE7naUGYajqVizRbDRR",
                "cover_link" => "/cover/RapatKerja.jpg",
                "judul_album" => "Rapat Kerja 2026/2027"
            ]
        ]);
    
    }
}
