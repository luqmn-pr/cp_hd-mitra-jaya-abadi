<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'hero_image',
        'thumbnail',
        'icon',
        'is_featured',
        'is_active',
        'sort_order',
        'meta_title',
        'meta_description',
    ];

    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    public function features(): HasMany
    {
        return $this->hasMany(ServiceFeature::class);
    }

    public function portfolios(): HasMany
    {
        return $this->hasMany(Portfolio::class);
    }

    /**
     * Get list of other orderable product examples for this service category.
     *
     * @return array<int, array{title: string, tag: string, spec: string, description: string, icon: string}>
     */
    public function getOtherProductExamples(): array
    {
        return match ($this->slug) {
            'percetakan' => [
                [
                    'title' => 'Kalender Meja & Dinding Kampus',
                    'tag' => 'Produksi Tahunan',
                    'spec' => 'Art Carton 260gr · Dudukan Linen Hardcover · Jilid Ring Spiral Kawat Emas/Hitam',
                    'description' => 'Kalender akademik tahunan lengkap dengan agenda perkuliahan, penandaan libur dies natalis, dan galeri foto kegiatan kampus. Cinderamata populer untuk relasi institusi.',
                    'icon' => 'calendar',
                ],
                [
                    'title' => 'Sertifikat & Piagam Akreditasi Berhologram',
                    'tag' => 'Keamanan Tinggi',
                    'spec' => 'Kertas Concorde / Linen 230gr · Cetak Foil Emas/Perak · Stempel Hologram Anti-Palsu',
                    'description' => 'Pencetakan piagam wisudawan berprestasi, sertifikat pelatihan dosen, dan dokumen akreditasi resmi dengan pengaman stempel hologram dan nomor seri unik.',
                    'icon' => 'certificate',
                ],
                [
                    'title' => 'Brosur & Leaflet Promosi PMB',
                    'tag' => 'Promosi Kampus',
                    'spec' => 'Art Paper 150gr Full Color · Model Lipat 2/3 (Tri-Fold) · Finishing Doff/Glossy',
                    'description' => 'Brosur sosialisasi penerimaan mahasiswa baru (PMB), pamflet program studi, dan media promosi expo pendidikan dengan kualitas cetak offset beresolusi tinggi.',
                    'icon' => 'document-text',
                ],
                [
                    'title' => 'ID Card Mahasiswa & Tali Lanyard Sablon',
                    'tag' => 'Identitas Kampus',
                    'spec' => 'PVC Standar ATM (Tahan Air) · Barcode/RFID Ready · Tali Lanyard Tissue 2cm Sablon Timbul',
                    'description' => 'Kartu tanda mahasiswa (KTM), ID card dosen dan staf tendik dengan foto tajam anti-luntur, dipadukan tali lanyard stopper berlogo resmi universitas.',
                    'icon' => 'identification',
                ],
                [
                    'title' => 'Agenda & Blocknote Seminar Kit',
                    'tag' => 'Event & Lokakarya',
                    'spec' => 'Cover Hardcover / Softcover Foil Emas · Kertas HVS 80gr Bergaris · Jilid Jahit Lem Panas',
                    'description' => 'Buku catatan resmi untuk perlengkapan seminar nasional, rapat kerja tahunan rektorat, dan konferensi internasional dengan sisipan lembar profil kampus.',
                    'icon' => 'book-open',
                ],
                [
                    'title' => 'Roll-Up Banner & Backdrop Dies Natalis',
                    'tag' => 'Dekorasi Acara',
                    'spec' => 'Bahan Albatros / Luster Anti-Kerut · Rangka Aluminium Roll-Up Kokoh · Cetak Hi-Res 1200 DPI',
                    'description' => 'Media display visual untuk panggung sidang senat terbuka, pameran riset inovasi, dan backdrop foto wisuda dengan warna solid yang tidak memantul cahaya blitz.',
                    'icon' => 'presentation-chart',
                ],
            ],

            'konveksi' => [
                [
                    'title' => 'Kemeja PDH / PDL Mahasiswa & Ormawa',
                    'tag' => 'Seragam Harian',
                    'spec' => 'Bahan Nagata / American Drill Grade A · Bordir Komputer Timbul · Jahitan Rantai Kuat',
                    'description' => 'Kemeja dinas harian berfuring untuk Badan Eksekutif Mahasiswa (BEM), Himpunan Mahasiswa Jurusan (HMJ), dan seragam praktikum lapangan dengan kombinasi warna dinamis.',
                    'icon' => 'shirt',
                ],
                [
                    'title' => 'Jaket Bomber & Hoodie Angkatan',
                    'tag' => 'Identitas Angkatan',
                    'spec' => 'Bahan Cotton Fleece Tebal / Taslan Waterproof · Furing Parasut / Dakron · Bordir/Sablon DTF',
                    'description' => 'Jaket identitas angkatan mahasiswa baru, jaket himpunan, atau hoodie komunitas alumni dengan pola fitting modern, saku fungsional, dan resleting YKK awet.',
                    'icon' => 'hoodie',
                ],
                [
                    'title' => 'Topi Bordir & Scarf / Slayer Orientasi',
                    'tag' => 'Atribut PKKMB',
                    'spec' => 'Bahan Drill / Twill Berkualitas · Pengait Logam / Velcro · Sablon / Bordir Presisi',
                    'description' => 'Topi baseball, bucket hat, dan slayer kain segitiga warna khas fakultas untuk kebutuhan masa orientasi kampus (PKKMB), bakti sosial, dan kemah riset.',
                    'icon' => 'hat',
                ],
                [
                    'title' => 'Wearpack & Katelpak Bengkel / Lab Teknik',
                    'tag' => 'Standar K3',
                    'spec' => 'Bahan Drill Tebal Tahan Gesek · Reflektor Scotlite 3M Menyala · Ritsleting Dua Arah',
                    'description' => 'Baju pelindung kerja praktikum laboratorium mesin, elektro, dan sipil model terusan (one-piece) atau setelan celana yang memenuhi standar keselamatan kerja.',
                    'icon' => 'shield-check',
                ],
                [
                    'title' => 'Seragam Batik Khusus Dosen & Tendik',
                    'tag' => 'Eksklusif Kampus',
                    'spec' => 'Kain Katun Primisima / Dobby Halus · Motif Batik Custom Logo Kampus · Jahit Semi-Tailor',
                    'description' => 'Produksi kain dan pakaian batik seragam dinas hari resmi untuk pimpinan, staf fakultas, dan dosen dengan ornamen lambang perguruan tinggi.',
                    'icon' => 'sparkles',
                ],
                [
                    'title' => 'Polo Shirt Panitia & Dies Natalis',
                    'tag' => 'Casual Formal',
                    'spec' => 'Katun Lacoste CVC 24s Berpori Adem · Kerah Rajut Kuat · Bordir Dada & Lengan',
                    'description' => 'Kaos berkerah semi-formal yang nyaman dipakai seharian untuk panitia wisuda, agenda olahraga dies natalis, dan studi banding antar-kampus.',
                    'icon' => 'badge-check',
                ],
            ],

            'pengadaan-barang-jasa-lainnya' => [
                [
                    'title' => 'Medali Cor Logam & Kalung Wisudawan',
                    'tag' => 'Cinderamata Kehormatan',
                    'spec' => 'Bahan Logam Kuningan / Zamak Tebal · Sepuh Emas / Perak Mengkilap · Pita Satin Tebal 2 Warna',
                    'description' => 'Medali kelulusan wisuda berukir lambang universitas 2 sisi dengan detail ornamen timbul yang tajam dan pita kalung leher yang nyaman dikenakan.',
                    'icon' => 'medal',
                ],
                [
                    'title' => 'Paket Seminar Kit Premium & Totebag Canvas',
                    'tag' => 'Souvenir Lengkap',
                    'spec' => 'Totebag Blacu/Canvas Tebal · Pulpen Metal Laser Grafir · Notebook Spiral Custom',
                    'description' => 'Paket perlengkapan peserta seminar internasional atau workshop riset lengkap, dikemas rapi dalam tas jinjing berlogo resmi institusi.',
                    'icon' => 'shopping-bag',
                ],
                [
                    'title' => 'Flashdisk Kartu & Powerbank Custom Logo',
                    'tag' => 'Merchandise Digital',
                    'spec' => 'Kapasitas 16GB / 32GB / 64GB Grade A · Cetak UV Full Color 2 Sisi · Garansi Chip 1 Tahun',
                    'description' => 'Media penyimpanan berkas digital tipis model kartu ATM untuk narasumber kuliah umum, reviewer jurnal, dan kenang-kenangan tamu VIP perguruan tinggi.',
                    'icon' => 'cpu-chip',
                ],
                [
                    'title' => 'Payung Lipat Otomatis & Payung Golf Branding',
                    'tag' => 'Cinderamata Dosen Tamu',
                    'spec' => 'Rangka Fiber Anti-Patah · Lapisan Silver Anti-UV · Buka Otomatis 1 Tombol',
                    'description' => 'Payung promosi berukuran besar dengan sablon logo presisi, sangat diminati sebagai cenderamata dies natalis dan bingkisan untuk mitra kerja sama kampus.',
                    'icon' => 'umbrella',
                ],
                [
                    'title' => 'Pin Logam Enamel & Lencana Magnet Jas',
                    'tag' => 'Atribut Resmi',
                    'spec' => 'Kuningan Cor Lapis Resin Bening · Pengait Magnet Kuat (Anti Merusak Jas) · Cetak Timbul',
                    'description' => 'Pin dasi dan bros kerah jas almamater bersepuh emas untuk identitas pimpinan universitas, delegasi lomba mahasiswa, dan anggota dewan kehormatan.',
                    'icon' => 'star',
                ],
                [
                    'title' => 'Podium Pidato Kayu Jati & Tiang Pataka',
                    'tag' => 'Fasilitas Protokoler',
                    'spec' => 'Kayu Jati / Mahoni Solid Finishing Melamin · Lambang Logam Timbul · Tiang Bendera Stainless',
                    'description' => 'Pengadaan mimbar pidato resmi auditorium kampus berukir lambang universitas serta tiang bendera pataka fakultas untuk ruang sidang dan senat.',
                    'icon' => 'academic-cap',
                ],
            ],

            'sistem-informasi' => [
                [
                    'title' => 'Portal PMB Online & CBT Ujian Mandiri',
                    'tag' => 'Penerimaan Mahasiswa',
                    'spec' => 'Framework Laravel Modern · Computer Based Test (CBT) Anti-Curang · Pembayaran Virtual Account',
                    'description' => 'Sistem terpadu pendaftaran mahasiswa baru dari pengisian formulir, unggah berkas ijazah, ujian seleksi berbasis komputer acak, hingga penerbitan NIM otomatis.',
                    'icon' => 'globe-alt',
                ],
                [
                    'title' => 'Learning Management System (LMS / E-Learning)',
                    'tag' => 'Pembelajaran Digital',
                    'spec' => 'Integrasi SIAKAD & Feeder · Modul Tugas & Kuis Otomatis · Support Video Conference',
                    'description' => 'Platform perkuliahan daring interaktif yang memudahkan dosen mengunggah materi modul, presensi kehadiran mahasiswa online, dan penilaian transparan.',
                    'icon' => 'computer-desktop',
                ],
                [
                    'title' => 'Sistem Informasi Tracer Study & Alumni',
                    'tag' => 'Standar Akreditasi',
                    'spec' => 'Kuesioner Standar Kemendikbudristek · Dashboard Statistik Masa Tunggu Kerja · Bursa Karir',
                    'description' => 'Aplikasi pelacakan rekam jejak lulusan untuk memenuhi instrumen akreditasi program studi (LAM / BAN-PT), forum komunikasi alumni, dan lowongan kerja industri.',
                    'icon' => 'chart-bar-square',
                ],
                [
                    'title' => 'Sistem Keuangan Kampus & Virtual Account Bank',
                    'tag' => 'Finansial Terintegrasi',
                    'spec' => 'Host-to-Host Bank Mandiri/BNI/BRI/BCA · Real-Time Reconciliation · Modul Tagihan SPP/UKT',
                    'description' => 'Pencatatan pembayaran biaya kuliah mahasiswa secara otomatis tanpa verifikasi manual bukti transfer, lengkap dengan laporan kas dan tunggakan per fakultas.',
                    'icon' => 'banknotes',
                ],
                [
                    'title' => 'Aplikasi Presensi GPS & QR Code Dosen/Mahasiswa',
                    'tag' => 'Absensi Cerdas',
                    'spec' => 'Geofencing Radius Kampus · Deteksi Foto Selfie (Face Detection) · Rekapitulasi Presensi BKD',
                    'description' => 'Aplikasi absensi mobile web/PWA untuk mencatat kehadiran dosen mengajar dan staf kependidikan secara presisi dan anti manipulasi lokasi GPS.',
                    'icon' => 'device-phone-mobile',
                ],
                [
                    'title' => 'Sistem Manajemen Aset & Logistik (SIMASET)',
                    'tag' => 'Inventaris Kampus',
                    'spec' => 'Labeling Barcode / QR Code Aset · Jadwal Kalibrasi & Servis · Pencatatan SPJ & BAST',
                    'description' => 'Pengelolaan inventaris sarana dan prasarana kampus dari gedung, proyektor kelas, laboratorium, hingga kendaraan dinas dengan riwayat pemeliharaan berkala.',
                    'icon' => 'building-office-2',
                ],
            ],

            default => [],
        };
    }
}
