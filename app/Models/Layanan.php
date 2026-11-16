<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Layanan extends Model
{
    protected $table = 'services';

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
        return $this->hasMany(ServiceFeature::class, 'service_id');
    }

    public function portfolios(): HasMany
    {
        return $this->hasMany(Portfolio::class, 'service_id');
    }

    /**
     * Get list of other orderable product examples for this service category.
     *
     * @return array<int, array{title: string, image: string}>
     */
    public function getOtherProductExamples(): array
    {
        return match ($this->slug) {
            'percetakan' => [
                [
                    'title' => 'Kalender Meja & Dinding Kampus',
                    'image' => 'images/products/percetakan-kalender.jpg',
                ],
                [
                    'title' => 'Sertifikat & Piagam Akreditasi',
                    'image' => 'images/products/percetakan-sertifikat.jpg',
                ],
                [
                    'title' => 'Brosur & Leaflet Promosi PMB',
                    'image' => 'images/products/percetakan-brosur.jpg',
                ],
                [
                    'title' => 'ID Card Mahasiswa & Tali Lanyard',
                    'image' => 'images/products/percetakan-idcard.jpg',
                ],
                [
                    'title' => 'Buku Agenda & Blocknote Seminar',
                    'image' => 'images/products/percetakan-agenda.jpg',
                ],
                [
                    'title' => 'Roll-Up Banner & Backdrop Wisuda',
                    'image' => 'images/products/percetakan-banner.jpg',
                ],
            ],

            'konveksi' => [
                [
                    'title' => 'Kemeja PDH / PDL Mahasiswa & Ormawa',
                    'image' => 'images/products/konveksi-pdh.jpg',
                ],
                [
                    'title' => 'Jaket Bomber & Hoodie Angkatan',
                    'image' => 'images/products/konveksi-hoodie.jpg',
                ],
                [
                    'title' => 'Topi Bordir & Scarf / Slayer Ospek',
                    'image' => 'images/products/konveksi-topi.jpg',
                ],
                [
                    'title' => 'Wearpack & Katelpak Bengkel K3',
                    'image' => 'images/products/konveksi-wearpack.jpg',
                ],
                [
                    'title' => 'Seragam Batik Khusus Dosen & Tendik',
                    'image' => 'images/products/konveksi-batik.jpg',
                ],
                [
                    'title' => 'Polo Shirt Panitia & Dies Natalis',
                    'image' => 'images/products/konveksi-polo.jpg',
                ],
            ],

            'pengadaan-barang-jasa-lainnya' => [
                [
                    'title' => 'Medali Cor Logam & Kalung Wisudawan',
                    'image' => 'images/products/pengadaan-medali.jpg',
                ],
                [
                    'title' => 'Paket Seminar Kit & Totebag Canvas',
                    'image' => 'images/products/pengadaan-seminarkit.jpg',
                ],
                [
                    'title' => 'Flashdisk Kartu & Powerbank Logo',
                    'image' => 'images/products/pengadaan-flashdisk.jpg',
                ],
                [
                    'title' => 'Payung Lipat Otomatis Branding Kampus',
                    'image' => 'images/products/pengadaan-payung.jpg',
                ],
                [
                    'title' => 'Pin Logam Enamel & Lencana Magnet Jas',
                    'image' => 'images/products/pengadaan-pin.jpg',
                ],
                [
                    'title' => 'Podium Pidato Kayu Jati & Tiang Pataka',
                    'image' => 'images/products/pengadaan-podium.jpg',
                ],
            ],

            'sistem-informasi' => [
                [
                    'title' => 'Portal PMB Online & CBT Ujian Mandiri',
                    'image' => 'images/products/si-pmb.jpg',
                ],
                [
                    'title' => 'Learning Management System (LMS E-Learning)',
                    'image' => 'images/products/si-lms.jpg',
                ],
                [
                    'title' => 'Sistem Informasi Tracer Study & Alumni',
                    'image' => 'images/products/si-tracer.jpg',
                ],
                [
                    'title' => 'Sistem Keuangan Kampus & Virtual Account',
                    'image' => 'images/products/si-keuangan.jpg',
                ],
                [
                    'title' => 'Aplikasi Presensi GPS Dosen & Mahasiswa',
                    'image' => 'images/products/si-presensi.jpg',
                ],
                [
                    'title' => 'Sistem Manajemen Aset & Logistik (SIMASET)',
                    'image' => 'images/products/si-aset.jpg',
                ],
            ],

            default => [],
        };
    }
}
