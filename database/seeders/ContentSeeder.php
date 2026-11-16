<?php

namespace Database\Seeders;

use App\Models\HomepageSection;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\ServiceFeature;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Site Settings (Sesuai Dokumen Company Profile 2022)
        SiteSetting::updateOrCreate(
            ['id' => 1],
            [
                'company_name' => 'CV. HD Mitra Jaya Abadi',
                'director_name' => 'Devi Indriyani',
                'director_title' => 'Direktur',
                'nib' => '2008210031124',
                'notary_deed' => 'Notaris Tina Martina, S.H., M.KN.',
                'established_date' => 'Agustus 2021',
                'tagline' => 'Service Excellent | Sebuah Dedikasi Untuk Melayani Sepenuh Hati',
                'email' => 'hdmjabadi@gmail.com',
                'phone' => '0812-2256-9863',
                'whatsapp' => '0812-2256-9863',
                'address' => 'Jl. Kadipaten 1 No. 1B, Antapani Kidul, Kec. Antapani, Kota Bandung, Jawa Barat 40291',
                'google_maps_url' => 'https://maps.google.com/maps?q=Jl.+Kadipaten+1+No.+1B+Bandung&output=embed',
                'footer_description' => 'CV. HD Mitra Jaya Abadi adalah mitra terpercaya pengadaan percetakan, konveksi, barang & jasa, serta sistem informasi untuk perguruan tinggi dan instansi, khususnya di lingkungan LLDIKTI Wilayah IV.',
                'social_links' => [
                    ['platform' => 'Instagram', 'url' => 'https://instagram.com/hdmitrajaya'],
                    ['platform' => 'Facebook', 'url' => 'https://facebook.com/hdmitrajaya'],
                    ['platform' => 'LinkedIn', 'url' => 'https://linkedin.com/company/hdmitrajaya'],
                ],
            ]
        );

        // 2. Services & Features (4 Bidang Layanan Aktif)
        $services = [
            [
                'name' => 'Percetakan',
                'slug' => 'percetakan',
                'short_description' => 'Melayani pengadaan dan pemesanan pencetakan seperti map ijazah emboss emas, buku wisuda, majalah profil, brosur, amplop kop surat, dan kebutuhan cetak kampus lainnya.',
                'description' => "Layanan percetakan profesional dengan teknologi offset dan digital printing berstandar mutu tinggi. Kami melayani perguruan tinggi negeri maupun swasta, lembaga pendidikan, serta instansi kedinasan.\n\nDengan mesin cetak modern dan tenaga ahli berpengalaman, kami menjamin ketajaman warna, presisi laminasi/emboss, serta ketepatan waktu pengerjaan sebelum hari pelaksanaan wisuda akbar atau agenda kampus.",
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 1,
                'meta_title' => 'Layanan Percetakan Profesional Bandung - CV. HD Mitra Jaya Abadi',
                'meta_description' => 'Jasa percetakan map ijazah emboss emas, buku wisuda, majalah profil, brosur, dan amplop kop surat resmi kampus.',
                'features' => [
                    ['title' => 'Map Ijazah & Sertifikat Emboss Emas', 'description' => 'Bahan ASE/kulit imitasi tebal, siku logam pelindung, hotprint foil emas berlogo timbul'],
                    ['title' => 'Buku Wisuda & Majalah Profil', 'description' => 'Full color art paper/carton, finishing laminasi doff/glossy, spot UV, jilid jahit benang'],
                    ['title' => 'Buku Pedoman Akademik & Modul', 'description' => 'Buku kurikulum akademik, jurnal program studi, modul kuliah praktikum'],
                    ['title' => 'Amplop Kop Surat & Formulir NCR', 'description' => 'Kop surat tata naskah dinas, amplop rektorat folio, kwitansi SPJ, dan map arsip'],
                ],
            ],
            [
                'name' => 'Konveksi',
                'slug' => 'konveksi',
                'short_description' => 'Melayani pengadaan dan pemesanan konveksi seperti paket toga wisuda lengkap, jas almamater, rompi kegiatan, kaos event/PKKMB, dan jas praktikum medis.',
                'description' => "Layanan konveksi dan garment profesional spesialis pakaian akademik dan seragam institusi. Kami memproduksi pakaian seragam yang rapi, kuat, dan nyaman dikenakan dengan pilihan bahan kain unggulan (bestway halus, american drill, katun combed 30s) serta bordir komputer presisi tinggi.\n\nKapasitas workshop kami siap melayani pesanan partai besar untuk ribuan mahasiswa baru dan wisudawan secara tepat waktu.",
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 2,
                'meta_title' => 'Konveksi & Garment Kampus Terpercaya - CV. HD Mitra Jaya Abadi',
                'meta_description' => 'Produksi paket toga wisuda lengkap, jas almamater kampus, kaos PKKMB, rompi lapangan, dan baju medis.',
                'features' => [
                    ['title' => 'Paket Toga Wisuda Lengkap', 'description' => 'Jubah kain bestway dingin, topi beludru, kalung medali samir satin bordir, tabung ijazah'],
                    ['title' => 'Jas Almamater Kampus', 'description' => 'Bahan American Drill original berfuring badan dengan bordir lambang universitas'],
                    ['title' => 'Kaos Event & Ospek (PKKMB)', 'description' => 'Bahan katun combed 30s adem, sablon DTF/plastisol awet untuk ribuan mahasiswa'],
                    ['title' => 'Rompi Lapangan & Jas Lab Medis', 'description' => 'Rompi outdoor banyak saku untuk KKN dan jas praktikum kesehatan berstandar steril'],
                ],
            ],
            [
                'name' => 'Pengadaan Barang & Jasa',
                'slug' => 'pengadaan-barang-jasa-lainnya',
                'short_description' => 'Melayani pengadaan barang/jasa institusi seperti plakat kristal 3D, plakat kayu kuningan, medali wisuda, seminar kit, dan cinderamata resmi.',
                'description' => "Penyedia pengadaan barang dan logistik umum berizin resmi untuk pemenuhan kebutuhan perguruan tinggi, lembaga, dan instansi.\n\nMenyediakan plakat penghargaan kristal laser 3D, plakat kayu berukir logam kuningan, medali cor wisuda, seminar kit, serta souvenir cinderamata eksklusif seperti tumbler vacuum custom gift box.",
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 3,
                'meta_title' => 'Pengadaan Barang & Jasa Kampus dan Instansi - CV. HD Mitra Jaya Abadi',
                'meta_description' => 'Penyedia plakat kristal, cinderamata plakat kayu, medali wisuda, seminar kit, dan tumbler custom.',
                'features' => [
                    ['title' => 'Plakat Kristal 3D & Akrilik Grafir', 'description' => 'Kristal optik tebal dengan grafir laser 3D berakurasi tinggi dalam kotak beludru'],
                    ['title' => 'Plakat Kayu Logo Logam Kuningan', 'description' => 'Kayu plitur glossy dengan emblem cor logam kuningan timbul untuk cenderamata kehormatan'],
                    ['title' => 'Paket Cenderamata Tumbler Custom', 'description' => 'Tumbler stainless vacuum tahan panas 12 jam grafir laser logo berkotak eksklusif'],
                    ['title' => 'Medali Cor Logam & Seminar Kit', 'description' => 'Medali kuningan sepuh emas/perak, lanyard id card, totebag, dan pulpen logo'],
                ],
            ],
            [
                'name' => 'Sistem Informasi',
                'slug' => 'sistem-informasi',
                'short_description' => 'Melayani pengadaan dan pemesanan sistem informasi seperti SIAKAD, SIMPEG, E-Arsip LLDIKTI, portal PMB Online, repository karya ilmiah, dan aplikasi digital kampus.',
                'description' => "Solusi transformasi dan efisiensi digital bagi perguruan tinggi dan lembaga. Kami merancang dan membangun sistem informasi terintegrasi, aman, dan mudah digunakan (user-friendly).\n\nLayanan mencakup Sistem Informasi Akademik (SIAKAD terintegrasi Feeder PDDIKTI), SIMPEG Kepegawaian, E-Arsip Digital LLDIKTI, Repository Kampus, E-Journal (OJS), Portal PMB Online, dan Portal Alumni.",
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 4,
                'meta_title' => 'Jasa Pembuatan Sistem Informasi & SIAKAD - CV. HD Mitra Jaya Abadi',
                'meta_description' => 'Pengembangan SIAKAD kampus, SIMPEG kepegawaian, E-Arsip digital, repository karya ilmiah, dan PMB online.',
                'features' => [
                    ['title' => 'SIAKAD & Portal Mahasiswa Terpadu', 'description' => 'Manajemen KRS, KHS, jadwal, dosen wali, dan sinkronisasi Feeder PDDIKTI'],
                    ['title' => 'SIMPEG (Sistem Informasi Kepegawaian)', 'description' => 'Monitoring data dosen, beban kerja dosen (BKD), pangkat, dan arsip kepegawaian'],
                    ['title' => 'Dashboard E-Arsip Digital Instansi', 'description' => 'Arsip dinamis, arsip musnah, arsip permanen, klasifikasi tata naskah persuratan'],
                    ['title' => 'Repository Kampus & Portal PMB Online', 'description' => 'Pelestarian karya ilmiah tugas akhir/HKI dan sistem registrasi mahasiswa baru online'],
                ],
            ],
        ];

        foreach ($services as $serviceData) {
            $features = $serviceData['features'] ?? [];
            unset($serviceData['features']);

            $service = Service::updateOrCreate(['slug' => $serviceData['slug']], $serviceData);

            $service->features()->delete();
            foreach ($features as $fIndex => $feature) {
                ServiceFeature::create([
                    'service_id' => $service->id,
                    'title' => $feature['title'],
                    'description' => $feature['description'],
                    'sort_order' => $fIndex + 1,
                ]);
            }
        }

        // 3. Portfolios (Proyek Riil Sesuai Dokumen Company Profile)
        $percetakan = Service::where('slug', 'percetakan')->first();
        $konveksi = Service::where('slug', 'konveksi')->first();
        $pengadaan = Service::where('slug', 'pengadaan-barang-jasa-lainnya')->first();
        $si = Service::where('slug', 'sistem-informasi')->first();

        $portfolios = [
            // Percetakan
            [
                'service_id' => $percetakan?->id,
                'title' => 'Pengadaan Map Ijazah Eksklusif Hotprint & Emboss Timbul',
                'slug' => 'pengadaan-map-ijazah-hotprint-emboss',
                'excerpt' => 'Produksi map ijazah berbahan ASE tebal berlapis karton 30A dengan foil hotprint emas dan mika dalam berstandar ijazah nasional.',
                'description' => "Produksi map ijazah kelulusan dan map sertifikat wisuda menggunakan bahan ASE berkualitas tinggi berlogo timbul hotprint emas/perak. Dilengkapi dengan sudut siku logam pelindung warna emas serta kantong mika bening anti-lengket untuk mengamankan ijazah dan transkrip nilai alumni.\n\nDikerjakan dengan presisi tinggi dan kontrol mutu ketat per unit untuk kebutuhan wisuda ribuan sarjana.",
                'client_name' => 'Universitas Pasundan & Unisba',
                'project_date' => '2024-08-15',
                'cover_image' => 'portfolios/product-3-map.jpg',
                'is_featured' => true,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 1,
            ],
            [
                'service_id' => $percetakan?->id,
                'title' => 'Pencetakan Majalah Profil Kampus & Buku Wisuda',
                'slug' => 'pencetakan-majalah-profil-dan-buku-wisuda',
                'excerpt' => 'Pencetakan buku majalah profil tahunan dan buku wisuda institusi dengan finishing soft-touch laminasi dan jilid benang.',
                'description' => 'Pencetakan majalah profil perguruan tinggi dan buku wisuda lengkap full color dengan kertas Art Paper 150gr dan cover Art Carton 310gr finishing doff berkelas. Warna tajam, tata letak rapi, serta jilid lem panas binding yang kokoh dan tahan lama.',
                'client_name' => 'Universitas Al-Ghifari & STMIK-IM Bandung',
                'project_date' => '2024-06-10',
                'cover_image' => 'portfolios/product-3-map.jpg',
                'is_featured' => true,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 2,
            ],
            [
                'service_id' => $percetakan?->id,
                'title' => 'Pencetakan Buku Pedoman Akademik & Modul Kuliah',
                'slug' => 'pencetakan-buku-pedoman-akademik-modul',
                'excerpt' => 'Pencetakan buku pedoman kurikulum akademik, jurnal program studi, dan modul ajar perkuliahan kampus.',
                'description' => 'Penyediaan dan pencetakan buku pedoman akademik mahasiswa baru, formulir registrasi KRS, modul praktikum teknik informatika, dan perlengkapan administrasi perkuliahan semester ganjil/genap.',
                'client_name' => 'STMIK-IM (Indonesia Mandiri)',
                'project_date' => '2024-09-05',
                'is_featured' => false,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 3,
            ],
            [
                'service_id' => $percetakan?->id,
                'title' => 'Amplop Kop Surat Resmi & Dokumen Lembaga Institusi',
                'slug' => 'amplop-kop-surat-resmi-institusi',
                'excerpt' => 'Pengadaan amplop dinas berkop resmi, formulir NCR, dan map arsip persuratan rektorat dan fakultas.',
                'description' => 'Pencetakan kebutuhan surat-menyurat resmi universitas, meliputi amplop folio berlogo emboss, kop surat berstandar tata naskah dinas, formulir kwitansi NCR berstempel, dan map berkas pendaftaran mahasiswa.',
                'client_name' => 'Universitas Islam Bandung (UNISBA) & UICM',
                'project_date' => '2024-04-12',
                'is_featured' => false,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 4,
            ],

            // Konveksi
            [
                'service_id' => $konveksi?->id,
                'title' => 'Pengadaan Paket Toga Wisuda Lengkap (Jubah, Samir, Topi Toga)',
                'slug' => 'pengadaan-paket-toga-wisuda-lengkap',
                'excerpt' => 'Produksi paket toga wisuda terpadu meliputi jubah bestway halus, topi beludru, kalung medali samir satin bordir, dan tabung ijazah.',
                'description' => "Pengadaan seragam toga wisuda sarjana dan magister. Paket terdiri dari jubah bahan kain bestway premium yang dingin dan jatuh rapi, topi toga karton tebal lapis beludru halus dengan kuncir kuning presisi, selempang/samir satin kombinasi warna fakultas berlogo bordir komputer timbul, serta medali logam kuningan cor bersepuh mengkilap.\n\nPenyelesaian tepat waktu sebelum hari pelaksanaan prosesi wisuda akbar.",
                'client_name' => 'Perguruan Tinggi Swasta LLDIKTI Wilayah IV',
                'project_date' => '2024-07-20',
                'cover_image' => 'portfolios/product-2-toga.jpg',
                'is_featured' => true,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 5,
            ],
            [
                'service_id' => $konveksi?->id,
                'title' => 'Produksi Kaos Event & Seragam PKKMB / Mahasiswa Baru',
                'slug' => 'produksi-kaos-event-pkkmb-mahasiswa-baru',
                'excerpt' => 'Produksi massal kaos orientasi mahasiswa baru (PKKMB) dan kaos event reuni akbar bahan katun combed 30s premium.',
                'description' => 'Pembuatan kaos seragam kegiatan Pengenalan Kehidupan Kampus bagi Mahasiswa Baru (PKKMB) berbahan katun combed 30s reaktif yang adem dan menyerap keringat. Dilengkapi sablon DTF dan plastisol tahan cuci berlogo resmi kampus.',
                'client_name' => 'Universitas Linggabuana PGRI Sukabumi',
                'project_date' => '2024-08-25',
                'cover_image' => 'portfolios/product-6-vest.jpg',
                'is_featured' => true,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 6,
            ],
            [
                'service_id' => $konveksi?->id,
                'title' => 'Produksi Jas Almamater Kampus & Rompi Lapangan Kegiatan',
                'slug' => 'produksi-jas-almamater-rompi-lapangan',
                'excerpt' => 'Pembuatan jas almamater berfuring badan dan rompi serbaguna lapangan dengan bordir komputer presisi lambang universitas.',
                'description' => 'Pengadaan jas almamater berbahan American Drill Grade A serta rompi lapangan outdoor berfuring jaring dengan saku fungsional untuk kegiatan KKN, bakti sosial, dan penelitian dosen-mahasiswa.',
                'client_name' => 'Universitas Mandiri & STISIP Guna Nusantara',
                'project_date' => '2024-09-01',
                'cover_image' => 'portfolios/product-6-vest.jpg',
                'is_featured' => false,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 7,
            ],
            [
                'service_id' => $konveksi?->id,
                'title' => 'Pengadaan Jas Lab Medis & Seragam Profesi Kesehatan',
                'slug' => 'pengadaan-jas-lab-medis-seragam-profesi',
                'excerpt' => 'Produksi jas laboratorium lengan panjang dan seragam praktikum klinik medis bahan katun drill steril.',
                'description' => 'Penyediaan jas lab praktikum dan baju dinas harian perawat/analis kesehatan dengan jahitan tailormade berstandar sanitasi medis, dilengkapi kancing tertutup dan bordir badge nama & logo instansi.',
                'client_name' => 'Sekolah Tinggi Ilmu Kesehatan & Farmasi',
                'project_date' => '2024-10-15',
                'is_featured' => false,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 8,
            ],

            // Pengadaan Barang & Jasa
            [
                'service_id' => $pengadaan?->id,
                'title' => 'Pengadaan Plakat Kristal 3D Laser & Akrilik Penghargaan KKN',
                'slug' => 'pengadaan-plakat-kristal-akrilik-kkn',
                'excerpt' => 'Pembuatan cinderamata plakat penghargaan akrilik dan plakat kristal optik grafir laser 3D dalam kotak beludru merah eksklusif.',
                'description' => 'Produksi plakat penghargaan resmi kemitraan Kuliah Kerja Nyata (KKN) dan cinderamata wisudawan terbaik. Menggunakan bahan kristal optik tebal dengan teknologi internal 3D laser gravir berakurasi milimeter.',
                'client_name' => 'STIE Miftahul Huda Subang',
                'project_date' => '2024-08-30',
                'cover_image' => 'portfolios/product-1-trophy.jpg',
                'is_featured' => true,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 9,
            ],
            [
                'service_id' => $pengadaan?->id,
                'title' => 'Pembuatan Plakat Kayu Eksklusif Logo Logam Kuningan',
                'slug' => 'pembuatan-plakat-kayu-logam-kuningan',
                'excerpt' => 'Plakat penghargaan berukir kayu jati/mahoni plitur glossy dengan emblem kuningan cor lapis resin emas timbul.',
                'description' => 'Penyediaan plakat cendera mata kehormatan rektorat untuk pimpinan lembaga dan narasumber seminar nasional, dikemas dalam box bludru eksklusif dengan kancing magnetik.',
                'client_name' => 'Universitas Al-Khairiyah Cilegon',
                'project_date' => '2024-05-18',
                'cover_image' => 'portfolios/product-5-marble.jpg',
                'is_featured' => true,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 10,
            ],
            [
                'service_id' => $pengadaan?->id,
                'title' => 'Pengadaan Paket Cenderamata Tumbler Custom Gift Box',
                'slug' => 'pengadaan-cenderamata-tumbler-custom',
                'excerpt' => 'Pengadaan souvenir vacuum tumbler stainless custom grafir logo institusi dilengkapi box kardus sablon gold.',
                'description' => 'Penyediaan merchandise dan seminar kit berupa tumbler vacuum stainless steel tahan panas/dingin 12 jam dengan grafir laser presisi logo universitas, menjadi cinderamata favorit bagi peserta seminar internasional dan wisudawan.',
                'client_name' => 'Mitra Kampus LLDIKTI Wilayah IV',
                'project_date' => '2024-11-10',
                'cover_image' => 'portfolios/product-4-tumbler.jpg',
                'is_featured' => true,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 11,
            ],

            // Sistem Informasi
            [
                'service_id' => $si?->id,
                'title' => 'Sistem Informasi Akademik (SIAKAD) & Portal Mahasiswa',
                'slug' => 'pengembangan-siakad-portal-mahasiswa',
                'excerpt' => 'Aplikasi web sistem informasi akademik terintegrasi modul KRS, penilaian dosen, jadwal kuliah, dan sinkronisasi Feeder PDDIKTI.',
                'description' => 'Pembangunan dan implementasi sistem informasi akademik modern berbasis cloud yang melayani ribuan mahasiswa aktif. Memiliki portal login terpadu bagi mahasiswa, dosen wali, dan pengelola fakultas, dengan modul pembayaran biaya kuliah terhubung bank/virtual account.',
                'client_name' => 'Universitas Muhammadiyah Sukabumi (UMMI)',
                'project_date' => '2024-12-05',
                'is_featured' => true,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 12,
            ],
            [
                'service_id' => $si?->id,
                'title' => 'Sistem Informasi Kepegawaian (SIMPEG) Data Pegawai Kampus',
                'slug' => 'sistem-informasi-kepegawaian-simpeg-unwim',
                'excerpt' => 'Pengelolaan data tenaga pendidik (dosen) dan tenaga kependidikan (tendik), kenaikan pangkat, dan riwayat kinerja.',
                'description' => 'Pengembangan aplikasi pengelolaan berkas kepegawaian digital terpusat untuk memonitor beban kerja dosen (BKD), pangkat golongan, angka kredit, presensi kerja, serta data sertifikasi dosen secara aman dan terstruktur.',
                'client_name' => 'Universitas Winaya Mukti (UNWIM)',
                'project_date' => '2024-03-20',
                'is_featured' => false,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 13,
            ],
            [
                'service_id' => $si?->id,
                'title' => 'Implementasi Dashboard E-Arsip Digital LLDIKTI Wilayah IV',
                'slug' => 'implementasi-dashboard-e-arsip-lldikti',
                'excerpt' => 'Sistem tata kelola arsip dinamis, arsip musnah, arsip permanen, klasifikasi persuratan, dan pedoman kearsipan digital.',
                'description' => 'Aplikasi web kearsipan terintegrasi untuk mendata klasifikasi surat masuk/keluar, retensi arsip, log aktivitas peminjaman dokumen, serta pelaporan inventaris berkas kearsipan lembaga negara.',
                'client_name' => 'LLDIKTI Wilayah IV Jawa Barat & Banten',
                'project_date' => '2024-10-01',
                'is_featured' => false,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 14,
            ],
            [
                'service_id' => $si?->id,
                'title' => 'Repository Aset Intelektual, Karya Ilmiah & HKI',
                'slug' => 'repository-aset-intelektual-uniga',
                'excerpt' => 'Laman pelestarian dan publikasi karya ilmiah dosen dan mahasiswa, tugas akhir, PKM, bahan ajar, dan sertifikat HKI.',
                'description' => 'Pembangunan repository digital kampus terindeks untuk menampung seluruh naskah skripsi, tesis, publikasi riset dosen, modul pembelajaran, dan hak cipta kekayaan intelektual (HKI) civitas akademika.',
                'client_name' => 'Universitas Garut (UNIGA)',
                'project_date' => '2024-07-15',
                'is_featured' => false,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 15,
            ],
            [
                'service_id' => $si?->id,
                'title' => 'Portal PMB Online & Sistem E-Journal OJS Kampus',
                'slug' => 'portal-pmb-online-dan-e-journal',
                'excerpt' => 'Sistem penerimaan mahasiswa baru online otomatis dan publikasi jurnal ilmiah berkala (Open Journal Systems).',
                'description' => 'Sistem formulir pendaftaran mahasiswa baru otomatis dengan verifikasi dokumen online, dipadukan dengan konfigurasi platform E-Journal ilmiah berstandar ISSN untuk publikasi riset jurnal berkala.',
                'client_name' => 'Universitas Persatuan Islam (UNIPI) & STKIP NU',
                'project_date' => '2024-05-10',
                'is_featured' => false,
                'status' => 'published',
                'published_at' => now(),
                'sort_order' => 16,
            ],
        ];

        foreach ($portfolios as $portfolioData) {
            Portfolio::updateOrCreate(['slug' => $portfolioData['slug']], $portfolioData);
        }

        // 4. Partners (Klien Nyata PTS di Lingkungan LLDIKTI Wilayah IV)
        $partners = [
            ['name' => 'Universitas Islam Bandung (UNISBA)', 'website_url' => 'https://unisba.ac.id', 'sort_order' => 1, 'is_active' => true],
            ['name' => 'Universitas Pasundan (UNPAS)', 'website_url' => 'https://unpas.ac.id', 'sort_order' => 2, 'is_active' => true],
            ['name' => 'Universitas Garut (UNIGA)', 'website_url' => 'https://uniga.ac.id', 'sort_order' => 3, 'is_active' => true],
            ['name' => 'Universitas Muhammadiyah Sukabumi (UMMI)', 'website_url' => 'https://ummi.ac.id', 'sort_order' => 4, 'is_active' => true],
            ['name' => 'Universitas Suryakancana (UNSUR)', 'website_url' => 'https://unsur.ac.id', 'sort_order' => 5, 'is_active' => true],
            ['name' => 'Universitas Advent Indonesia (UNAI)', 'website_url' => 'https://unai.ac.id', 'sort_order' => 6, 'is_active' => true],
            ['name' => 'Universitas Al-Khairiyah (UNIVAL)', 'website_url' => 'https://unival.ac.id', 'sort_order' => 7, 'is_active' => true],
            ['name' => 'Institut Teknologi Harapan Bangsa (ITHB)', 'website_url' => 'https://ithb.ac.id', 'sort_order' => 8, 'is_active' => true],
            ['name' => 'IKOPIN University', 'website_url' => 'https://ikopin.ac.id', 'sort_order' => 9, 'is_active' => true],
            ['name' => 'STMIK-IM (Indonesia Mandiri)', 'website_url' => 'https://stmik-im.ac.id', 'sort_order' => 10, 'is_active' => true],
            ['name' => 'Universitas Linggabuana PGRI (UNLIP)', 'website_url' => 'https://unlip.ac.id', 'sort_order' => 11, 'is_active' => true],
            ['name' => 'Universitas Mandiri', 'website_url' => 'https://universitasmandiri.ac.id', 'sort_order' => 12, 'is_active' => true],
            ['name' => 'STIE Miftahul Huda Subang', 'website_url' => 'https://stiemiftahulhuda.ac.id', 'sort_order' => 13, 'is_active' => true],
            ['name' => 'IKIP Siliwangi', 'website_url' => 'https://ikipsiliwangi.ac.id', 'sort_order' => 14, 'is_active' => true],
            ['name' => 'Universitas Galuh (UNIGAL)', 'website_url' => 'https://unigal.ac.id', 'sort_order' => 15, 'is_active' => true],
            ['name' => 'Universitas Nurtanio Bandung (UNNUR)', 'website_url' => 'https://unnur.ac.id', 'sort_order' => 16, 'is_active' => true],
            ['name' => 'Universitas Kebangsaan Republik Indonesia', 'website_url' => 'https://ukri.ac.id', 'sort_order' => 17, 'is_active' => true],
            ['name' => 'Universitas Winaya Mukti (UNWIM)', 'website_url' => 'https://unwim.ac.id', 'sort_order' => 18, 'is_active' => true],
            ['name' => 'Universitas Persatuan Islam (UNIPI)', 'website_url' => 'https://unipi.ac.id', 'sort_order' => 19, 'is_active' => true],
            ['name' => 'STISIP Guna Nusantara Cianjur', 'website_url' => null, 'sort_order' => 20, 'is_active' => true],
            ['name' => 'STIKes Respati', 'website_url' => null, 'sort_order' => 21, 'is_active' => true],
            ['name' => 'Akademi Sekretari & Manajemen Ariyanti', 'website_url' => null, 'sort_order' => 22, 'is_active' => true],
        ];

        foreach ($partners as $partnerData) {
            Partner::updateOrCreate(['name' => $partnerData['name']], $partnerData);
        }

        // 5. Homepage Sections
        $sections = [
            [
                'section_key' => 'hero',
                'title' => 'Mendukung Kebutuhan Institusi, dari Pengadaan hingga Solusi Digital',
                'subtitle' => 'MITRA PENGADAAN & SOLUSI INSTITUSI',
                'description' => 'Melayani kebutuhan percetakan, konveksi, pengadaan barang/jasa, dan sistem informasi bagi perguruan tinggi maupun instansi di lingkungan LLDIKTI Wilayah IV dan sekitarnya.',
                'button_label' => 'Jelajahi Layanan',
                'button_url' => '/layanan',
                'sort_order' => 1,
            ],
            [
                'section_key' => 'about_intro',
                'title' => 'Mitra Andal untuk Kebutuhan Institusi',
                'subtitle' => 'TENTANG KAMI',
                'description' => 'CV. HD Mitra Jaya Abadi adalah penyedia layanan pengadaan dan solusi terpadu untuk perguruan tinggi dan instansi pemerintah. Berdiri sejak Agustus 2021 dengan NIB resmi 2008210031124, kami diperkuat tenaga Pelayanan Relasi (Account Executive) yang profesional untuk memastikan mutu pengerjaan, ketepatan jadwal, dan akuntabilitas administrasi.',
                'button_label' => 'Pelajari Profil Kami',
                'button_url' => '/tentang-kami',
                'sort_order' => 2,
            ],
            [
                'section_key' => 'services_intro',
                'title' => 'Solusi untuk Berbagai Kebutuhan Institusi',
                'subtitle' => 'LAYANAN KAMI',
                'description' => 'Empat bidang layanan terintegrasi yang dirancang untuk mendukung kelancaran operasional, kegiatan wisuda akbar, dan digitalisasi kampus.',
                'button_label' => 'Semua Layanan',
                'button_url' => '/layanan',
                'sort_order' => 3,
            ],
            [
                'section_key' => 'portfolio_intro',
                'title' => 'Hasil Pekerjaan Kami',
                'subtitle' => 'PORTOFOLIO',
                'description' => 'Dokumentasi hasil pengerjaan nyata dalam bidang percetakan, konveksi seragam, pengadaan cinderamata, dan sistem informasi akademik.',
                'button_label' => 'Lihat Semua Portofolio',
                'button_url' => '/portfolio',
                'sort_order' => 4,
            ],
            [
                'section_key' => 'partners_intro',
                'title' => 'Mitra Kerja Perguruan Tinggi di Lingkungan LLDIKTI Wilayah IV',
                'subtitle' => 'KLIEN & MITRA KAMPUS',
                'description' => 'Berpengalaman mendampingi puluhan perguruan tinggi swasta, sekolah tinggi, dan akademi di Jawa Barat & Banten.',
                'button_label' => null,
                'button_url' => null,
                'sort_order' => 5,
            ],
            [
                'section_key' => 'cta',
                'title' => 'Ada Kebutuhan untuk Institusi Anda?',
                'subtitle' => 'DISKUSIKAN KEBUTUHAN ANDA',
                'description' => 'Hubungi kami untuk mendiskusikan kebutuhan percetakan, konveksi, pengadaan barang/jasa, atau implementasi sistem informasi bersama tim Pelayanan Relasi kami.',
                'button_label' => 'Hubungi Kami',
                'button_url' => '/kontak',
                'sort_order' => 6,
            ],
        ];

        foreach ($sections as $sectionData) {
            HomepageSection::updateOrCreate(['section_key' => $sectionData['section_key']], $sectionData);
        }
    }
}
