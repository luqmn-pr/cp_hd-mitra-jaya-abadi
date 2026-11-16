@extends('layouts.app')

@section('title', ($settings->company_name ?? 'CV. HD Mitra Jaya Abadi') . ' - Mitra Pengadaan & Solusi Kampus')
@section('description', $settings->tagline ?? 'Melayani kebutuhan percetakan, konveksi, pengadaan barang/jasa, dan sistem informasi bagi perguruan tinggi maupun instansi.')

@section('content')

{{-- ==========================================
     1. HERO SECTION (#beranda)
     (Balanced 50:50 Symmetry, Harmonious Proportions & Controlled Whitespace)
     ========================================== --}}
<section id="beranda" class="relative bg-white pt-6 sm:pt-8 lg:pt-10 pb-8 sm:pb-10 lg:pb-12">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-10 xl:gap-12 items-center">

            <!-- Left: Hero Headline & Action (6 cols - Balanced 50:50 Symmetry) -->
            <div class="lg:col-span-6">
                <h1 class="text-3xl sm:text-4xl lg:text-[2.65rem] xl:text-[2.9rem] 2xl:text-[3.15rem] font-bold text-[#0F172A] leading-[1.18] tracking-tight">
                    <span class="relative inline-block text-[#2B3990] font-normal">
                        Pengadaan Kampus
                        <!-- Hand-drawn style decorative SVG curved underline in Brand Crimson Red -->
                        <svg class="absolute -bottom-1.5 left-0 w-full h-2.5 text-[#E30613]" viewBox="0 0 200 12" fill="none" preserveAspectRatio="none">
                            <path d="M3 9C60 2 140 2 197 9" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                    </span>
                    <span class="text-[#0F172A] font-extrabold"> Bervariasi,</span><br>
                    <span class="text-[#0F172A] font-extrabold">Berkualitas, Terpercaya,</span><br>
                    <span class="text-[#0F172A] font-extrabold">dan Amanah.</span>
                </h1>

                <p class="mt-4 sm:mt-5 text-sm sm:text-base lg:text-[17px] text-slate-600 font-normal leading-relaxed max-w-lg">
                    Semua kebutuhan yang Anda inginkan, buatnya di <strong class="text-[#0F172A] font-semibold">HD&nbsp;Mitra&nbsp;Jaya</strong> aja!
                </p>

                <!-- Action Button: Soft Light Gray Pill with 4-square Grid Icon (Unified Slate Style) -->
                <div class="mt-6 sm:mt-7">
                    <a href="#layanan" class="inline-flex items-center gap-2.5 px-5 py-3 rounded-2xl bg-slate-100 hover:bg-slate-200 text-[#0F172A] hover:text-[#2B3990] font-medium text-xs sm:text-sm transition-all shadow-2xs group border border-slate-200/60">
                        <svg class="w-4 h-4 text-slate-500 group-hover:text-[#2B3990] transition-colors" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                        <span>Lihat Layanan Kami</span>
                    </a>
                </div>
            </div>

            <!-- Right: 3-Slice Triptych Visual (6 cols - Balanced 50:50 Symmetry) -->
            <div class="lg:col-span-6">
                <div class="grid grid-cols-3 gap-2.5 sm:gap-3.5 h-[290px] sm:h-[320px] lg:h-[340px] xl:h-[360px]">
                    <!-- Slice 1: Left 1/3 (Map Ijazah & Percetakan) -->
                    <div class="relative overflow-hidden rounded-2xl sm:rounded-3xl shadow-sm border border-slate-200/80 bg-slate-100 group">
                        <img src="{{ asset('images/hero-4services.jpg') }}" 
                             alt="Dokumentasi Layanan CV. HD Mitra Jaya Abadi - Bagian 1" 
                             class="absolute inset-0 w-[300%] max-w-none h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                             style="left: 0%;">
                    </div>

                    <!-- Slice 2: Middle 1/3 (Toga Wisuda & Cinderamata Plakat) -->
                    <div class="relative overflow-hidden rounded-2xl sm:rounded-3xl shadow-sm border border-slate-200/80 bg-slate-100 group sm:-translate-y-2 transition-transform duration-300">
                        <img src="{{ asset('images/hero-4services.jpg') }}" 
                             alt="Dokumentasi Layanan CV. HD Mitra Jaya Abadi - Bagian 2" 
                             class="absolute inset-0 w-[300%] max-w-none h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                             style="left: -100%;">
                    </div>

                    <!-- Slice 3: Right 1/3 (Tumbler & Laptop SIAKAD) -->
                    <div class="relative overflow-hidden rounded-2xl sm:rounded-3xl shadow-sm border border-slate-200/80 bg-slate-100 group">
                        <img src="{{ asset('images/hero-4services.jpg') }}" 
                             alt="Dokumentasi Layanan CV. HD Mitra Jaya Abadi - Bagian 3" 
                             class="absolute inset-0 w-[300%] max-w-none h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                             style="left: -200%;">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ==========================================
     2. TENTANG KAMI SECTION (#tentang-kami)
     (Flush Bounding Box, Matched Grid Gaps & Symmetric Cadence)
     ========================================== --}}
<section id="tentang-kami" class="pt-4 sm:pt-6 lg:pt-8 pb-14 lg:pb-16 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-10 xl:gap-12 items-center">

            <!-- Left: Asymmetric Photo Collage (Flush Bounding Box 340-360px matching Hero) -->
            <div class="lg:col-span-6">
                <div class="h-[290px] sm:h-[320px] lg:h-[340px] xl:h-[360px] grid grid-cols-12 gap-2.5 sm:gap-3">
                    
                    <!-- Sub-col 1: Top Wide SIAKAD + Bottom 3 Micro-Thumbnails (7 cols) -->
                    <div class="col-span-7 flex flex-col gap-2.5 sm:gap-3 h-full">
                        <!-- Top wide photo: fills remaining height -->
                        <div class="flex-1 w-full rounded-2xl overflow-hidden shadow-xs border border-slate-200/80 bg-slate-900 group">
                            <img src="{{ asset('images/system-siakad.jpg') }}" 
                                 alt="Sistem Informasi Akademik (SIAKAD) &amp; Repository Kampus" 
                                 loading="lazy" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>

                        <!-- Bottom row: 3 micro-photos (fixed compact height) -->
                        <div class="grid grid-cols-3 gap-2 sm:gap-2.5 h-[70px] sm:h-[80px] lg:h-[85px] shrink-0">
                            <div class="h-full rounded-xl overflow-hidden shadow-2xs border border-slate-200/80 bg-slate-100">
                                <img src="{{ asset('images/product-3-map.jpg') }}" 
                                     alt="Map Ijazah Foil Emas" 
                                     loading="lazy" 
                                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="h-full rounded-xl overflow-hidden shadow-2xs border border-slate-200/80 bg-slate-100">
                                <img src="{{ asset('images/product-1-trophy.jpg') }}" 
                                     alt="Plakat Wisudawan" 
                                     loading="lazy" 
                                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="h-full rounded-xl overflow-hidden shadow-2xs border border-slate-200/80 bg-slate-100">
                                <img src="{{ asset('images/product-4-tumbler.jpg') }}" 
                                     alt="Tumbler Custom" 
                                     loading="lazy" 
                                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            </div>
                        </div>
                    </div>

                    <!-- Sub-col 2: Tall Vertical Toga Wisuda (5 cols, 100% full height) -->
                    <div class="col-span-5 h-full">
                        <div class="h-full w-full rounded-2xl overflow-hidden shadow-xs border border-slate-200/80 bg-slate-100 group">
                            <img src="{{ asset('images/product-2-toga.jpg') }}" 
                                 alt="Konveksi Toga Wisuda &amp; Jas Almamater" 
                                 loading="lazy" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right: Balanced Editorial Narrative (6 cols) -->
            <div class="lg:col-span-6 flex flex-col justify-center">
                <h2 class="text-xl sm:text-2xl lg:text-[1.85rem] xl:text-[2rem] font-bold text-[#0F172A] leading-snug mb-3 sm:mb-3.5 tracking-tight">
                    Jasa Pengadaan &amp; Konveksi Kampus Berkualitas di Kota Bandung.
                </h2>

                <p class="text-xs sm:text-sm lg:text-[15px] text-slate-600 leading-relaxed font-normal">
                    <strong class="text-[#0F172A] font-semibold">CV. HD MITRA JAYA ABADI</strong> adalah badan usaha resmi penyedia perlengkapan dan solusi terpadu perguruan tinggi di lingkungan LLDIKTI Wilayah IV. Beroperasi sejak 2021 dengan legalitas NIB <span class="font-medium text-[#0F172A]">2008210031124</span>, kami melayani empat pilar utama: percetakan map ijazah, konveksi toga wisuda, cinderamata plakat, serta sistem informasi kampus, didukung akuntabilitas SPJ, BAST, dan Faktur Pajak resmi.
                </p>

                <!-- Action CTA: E-Profil Company Profile PDF Link -->
                <div class="mt-4 sm:mt-5">
                    <a href="https://hd-mjabadi.com/file/eprofil.pdf" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2.5 px-5 py-2.5 sm:py-3 rounded-2xl bg-slate-100 hover:bg-slate-200 text-[#0F172A] hover:text-[#2B3990] font-medium text-xs sm:text-sm transition-all shadow-2xs group border border-slate-200/70">
                        <svg class="w-4 h-4 text-[#E30613]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                        </svg>
                        <span>Unduh E-Profil Perusahaan (PDF)</span>
                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-[#2B3990] group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- ==========================================
     3. LAYANAN KAMI (#layanan)
     (4 Columns Visual Grid)
     ========================================== --}}
<section id="layanan" class="py-12 sm:py-14 lg:py-16 bg-[#F8FAFC] border-b border-[#E2E8F0]">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-6 sm:mb-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl xl:text-[2.65rem] font-extrabold text-[#0F172A] tracking-tight leading-tight">
                Layanan Kami
            </h2>
            <p class="mt-2 sm:mt-2.5 text-sm sm:text-base lg:text-lg text-slate-600 font-medium leading-relaxed max-w-xl mx-auto">
                Solusi Terpadu untuk Kebutuhan Pengadaan Kampus
            </p>
        </div>

        <!-- 4 Services Visual Grid (All 4 Visible in 1 Viewport on Desktop) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-6 items-stretch">

            <!-- 1. Percetakan -->
            <a href="{{ route('service.detail', 'percetakan') }}"
               class="bg-white rounded-2xl overflow-hidden border border-slate-200/90 hover:border-[#2B3990] shadow-2xs hover:shadow-xl hover:shadow-[#2B3990]/5 hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group block">
                <div>
                    <!-- Photo Header -->
                    <div class="aspect-[16/10] bg-slate-100 overflow-hidden relative">
                        <img src="{{ asset('images/product-3-map.jpg') }}" 
                             alt="Map Ijazah Hardcover Foil Emas" 
                             loading="lazy" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <!-- Card Body -->
                    <div class="p-5">
                        <h3 class="text-base sm:text-lg font-bold text-[#0F172A] group-hover:text-[#2B3990] transition-colors leading-snug">
                            Percetakan
                        </h3>
                        <p class="text-xs sm:text-[13px] text-slate-500 leading-relaxed mt-2 font-normal">
                            Kami melayani pengadaan dan pemesanan pencetakan seperti brosur, map, kwitansi, buku wisuda, dan jenis percetakan lainnya yang ada di perguruan tinggi maupun instansi.
                        </p>
                    </div>
                </div>

                <div class="px-5 pb-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-[#2B3990]">
                    <span>Lihat Rincian</span>
                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                </div>
            </a>

            <!-- 2. Konveksi -->
            <a href="{{ route('service.detail', 'konveksi') }}"
               class="bg-white rounded-2xl overflow-hidden border border-slate-200/90 hover:border-[#2B3990] shadow-2xs hover:shadow-xl hover:shadow-[#2B3990]/5 hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group block">
                <div>
                    <!-- Photo Header -->
                    <div class="aspect-[16/10] bg-slate-100 overflow-hidden relative">
                        <img src="{{ asset('images/product-2-toga.jpg') }}" 
                             alt="Paket Toga Wisuda & Jas Almamater" 
                             loading="lazy" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <!-- Card Body -->
                    <div class="p-5">
                        <h3 class="text-base sm:text-lg font-bold text-[#0F172A] group-hover:text-[#2B3990] transition-colors leading-snug">
                            Konveksi
                        </h3>
                        <p class="text-xs sm:text-[13px] text-slate-500 leading-relaxed mt-2 font-normal">
                            Kami melayani pengadaan dan pemesanan konveksi seperti toga wisuda, jas almamater, jaket, jersey, baju, dan jenis konveksi lainnya yang ada di perguruan tinggi maupun instansi.
                        </p>
                    </div>
                </div>

                <div class="px-5 pb-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-[#2B3990]">
                    <span>Lihat Rincian</span>
                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                </div>
            </a>

            <!-- 3. Pengadaan Barang/Jasa Lainnya -->
            <a href="{{ route('service.detail', 'pengadaan-barang-jasa-lainnya') }}"
               class="bg-white rounded-2xl overflow-hidden border border-slate-200/90 hover:border-[#2B3990] shadow-2xs hover:shadow-xl hover:shadow-[#2B3990]/5 hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group block">
                <div>
                    <!-- Photo Header -->
                    <div class="aspect-[16/10] bg-slate-100 overflow-hidden relative">
                        <img src="{{ asset('images/product-1-trophy.jpg') }}" 
                             alt="Plakat Patung Wisudawan Eksklusif" 
                             loading="lazy" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <!-- Card Body -->
                    <div class="p-5">
                        <h3 class="text-base sm:text-lg font-bold text-[#0F172A] group-hover:text-[#2B3990] transition-colors leading-snug">
                            Pengadaan Barang/Jasa Lainnya
                        </h3>
                        <p class="text-xs sm:text-[13px] text-slate-500 leading-relaxed mt-2 font-normal">
                            Kami melayani pengadaan barang/jasa di perguruan tinggi maupun instansi.
                        </p>
                    </div>
                </div>

                <div class="px-5 pb-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-[#2B3990]">
                    <span>Lihat Rincian</span>
                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                </div>
            </a>

            <!-- 4. Sistem Informasi -->
            <a href="{{ route('service.detail', 'sistem-informasi') }}"
               class="bg-white rounded-2xl overflow-hidden border border-slate-200/90 hover:border-[#2B3990] shadow-2xs hover:shadow-xl hover:shadow-[#2B3990]/5 hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group block">
                <div>
                    <!-- Photo Header -->
                    <div class="aspect-[16/10] bg-slate-900 overflow-hidden relative">
                        <img src="{{ asset('images/system-siakad.jpg') }}" 
                             alt="Sistem Informasi Akademik SIAKAD Kampus" 
                             loading="lazy" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <!-- Card Body -->
                    <div class="p-5">
                        <h3 class="text-base sm:text-lg font-bold text-[#0F172A] group-hover:text-[#2B3990] transition-colors leading-snug">
                            Sistem Informasi
                        </h3>
                        <p class="text-xs sm:text-[13px] text-slate-500 leading-relaxed mt-2 font-normal">
                            Kami melayani pengadaan dan pemesanan sistem informasi seperti SIAKAD, persuratan, atau sistem lainnya sebagai optimalisasi kinerja di perguruan tinggi maupun instansi.
                        </p>
                    </div>
                </div>

                <div class="px-5 pb-5 pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-[#2B3990]">
                    <span>Lihat Rincian</span>
                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                </div>
            </a>

        </div>

    </div>
</section>

{{-- ==========================================
     4. PORTOFOLIO PROYEK (#portofolio)
     (Integrated Single-Page Filterable Gallery)
     ========================================== --}}
<section id="portofolio" class="py-16 lg:py-20 bg-white border-b border-[#E2E8F0]">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">

        <!-- Section Header with Integrated Top-Right Carousel Controls -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10 sm:mb-12">
            <div>
                <h2 class="text-3xl sm:text-4xl lg:text-[2.65rem] font-extrabold text-[#0F172A] tracking-tight leading-tight">
                    Portofolio Perusahaan
                </h2>
                <p class="text-slate-500 text-sm sm:text-base leading-relaxed mt-2.5 max-w-xl font-normal">
                    Dokumentasi proyek dan hasil pengerjaan pengadaan resmi yang telah diselesaikan dengan standar mutu terbaik.
                </p>
            </div>
            <div class="flex items-center gap-3 shrink-0 self-start md:self-end">
                <a href="{{ route('portfolio') }}" class="btn-outline text-xs sm:text-sm px-4 sm:px-5 py-2.5 shrink-0">
                    <span>Lihat Seluruh Arsip ({{ $allPortfolios->count() }} Proyek)</span>
                    <span>→</span>
                </a>

                <!-- Carousel Controls (Arrows + Counter) -->
                <div id="portfolio-carousel-controls" class="flex items-center gap-2 pl-3 border-l border-slate-200">
                    <button type="button" 
                            id="portfolio-prev-btn" 
                            class="w-10 h-10 rounded-full border border-slate-200 bg-white hover:bg-slate-50 hover:border-[#2B3990] text-slate-700 hover:text-[#2B3990] flex items-center justify-center transition-all shadow-2xs disabled:opacity-30 disabled:cursor-not-allowed"
                            aria-label="Halaman Portofolio Sebelumnya">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <span id="portfolio-page-counter" class="text-xs font-semibold text-slate-500 font-mono min-w-[3.5rem] text-center">01 / 04</span>
                    <button type="button" 
                            id="portfolio-next-btn" 
                            class="w-10 h-10 rounded-full border border-slate-200 bg-white hover:bg-slate-50 hover:border-[#2B3990] text-slate-700 hover:text-[#2B3990] flex items-center justify-center transition-all shadow-2xs disabled:opacity-30 disabled:cursor-not-allowed"
                            aria-label="Halaman Portofolio Berikutnya">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Filter Buttons (Vanilla JS Filter) -->
        <div class="flex flex-wrap items-center gap-2 mb-10 pb-4 border-b border-[#E2E8F0]" role="tablist">
            <button type="button" 
                    data-filter="all" 
                    class="portfolio-filter-btn px-4 py-2 rounded-full text-xs font-semibold transition-all duration-200 bg-[#2B3990] text-white shadow-2xs">
                Semua Kategori ({{ $allPortfolios->count() }})
            </button>
            <button type="button" 
                    data-filter="percetakan" 
                    class="portfolio-filter-btn px-4 py-2 rounded-full text-xs font-semibold transition-all duration-200 bg-white text-[#475569] border border-slate-200 hover:border-[#2B3990] hover:text-[#2B3990]">
                Percetakan
            </button>
            <button type="button" 
                    data-filter="konveksi" 
                    class="portfolio-filter-btn px-4 py-2 rounded-full text-xs font-semibold transition-all duration-200 bg-white text-[#475569] border border-slate-200 hover:border-[#2B3990] hover:text-[#2B3990]">
                Konveksi &amp; Apparel
            </button>
            <button type="button" 
                    data-filter="pengadaan-barang-jasa-lainnya" 
                    class="portfolio-filter-btn px-4 py-2 rounded-full text-xs font-semibold transition-all duration-200 bg-white text-[#475569] border border-slate-200 hover:border-[#2B3990] hover:text-[#2B3990]">
                Pengadaan Barang/Jasa
            </button>
            <button type="button" 
                    data-filter="sistem-informasi" 
                    class="portfolio-filter-btn px-4 py-2 rounded-full text-xs font-semibold transition-all duration-200 bg-white text-[#475569] border border-slate-200 hover:border-[#2B3990] hover:text-[#2B3990]">
                Sistem Informasi &amp; IT
            </button>
        </div>

        <!-- Portfolio Cards Grid -->
        <div id="portfolio-grid" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($allPortfolios as $item)
                @php
                    $categorySlug = $item->service?->slug ?? 'umum';
                    $fallbackImage = match($categorySlug) {
                        'percetakan' => asset('images/product-3-map.jpg'),
                        'konveksi' => asset('images/product-2-toga.jpg'),
                        'pengadaan-barang-jasa-lainnya' => asset('images/product-1-trophy.jpg'),
                        'sistem-informasi' => asset('images/2_pro.jpg'),
                        default => asset('images/product-1-trophy.jpg')
                    };
                    $imageUrl = $item->cover_image ? Storage::url($item->cover_image) : $fallbackImage;
                @endphp

                <div class="portfolio-item-card bg-white rounded-2xl overflow-hidden border border-[#E2E8F0] hover:border-[#2B3990] transition-all duration-200 shadow-2xs hover:shadow-md flex flex-col group"
                     data-category="{{ $categorySlug }}">
                    
                    <!-- Cover Image -->
                    <div class="aspect-[16/10] bg-[#F8FAFC] overflow-hidden relative border-b border-[#E2E8F0]">
                        <img src="{{ $imageUrl }}" 
                             alt="{{ $item->title }}"
                             loading="lazy"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

                        @if($item->service)
                            <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-md text-xs font-bold text-[#2B3990] border border-[#E2E8F0] shadow-2xs">
                                {{ $item->service->name }}
                            </span>
                        @endif
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            @if($item->client_name)
                                <div class="text-xs font-semibold text-[#64748B] mb-2 flex items-center gap-1.5 uppercase tracking-wider">
                                    <svg class="w-3.5 h-3.5 text-[#2B3990] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                    <span class="truncate">{{ $item->client_name }}</span>
                                </div>
                            @endif

                            <h3 class="font-bold text-[#0F172A] text-base sm:text-lg group-hover:text-[#2B3990] transition-colors leading-snug">
                                {{ $item->title }}
                            </h3>

                            @if($item->excerpt)
                                <p class="text-xs sm:text-sm text-[#475569] mt-2 line-clamp-2 leading-relaxed">
                                    {{ $item->excerpt }}
                                </p>
                            @endif
                        </div>

                        <div class="mt-5 pt-4 border-t border-[#F8FAFC] flex items-center justify-between text-xs font-semibold text-[#2B3990]">
                            <a href="{{ route('portfolio.detail', $item->slug) }}" class="inline-flex items-center gap-1 hover:underline">
                                <span>Lihat Rincian Dokumentasi</span>
                                <span class="group-hover:translate-x-1 transition-transform">→</span>
                            </a>
                            @if($item->project_date)
                                <span class="text-slate-400 font-mono text-[11px]">{{ date('Y', strtotime($item->project_date)) }}</span>
                            @endif
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

        <!-- Bottom Pagination Dots Indicator -->
        <div id="portfolio-pagination" class="mt-10 flex items-center justify-center gap-2"></div>

    </div>
</section>

{{-- ==========================================
     5. MITRA & REKANAN KAMPUS (#mitra)
     ========================================== --}}
@if($partners->isNotEmpty())
<section id="mitra" class="py-12 sm:py-14 bg-white border-b border-[#E2E8F0]">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        
        <div class="text-center max-w-2xl mx-auto mb-10">
            <h2 class="text-2xl sm:text-3xl font-bold text-[#0F172A] tracking-tight">
                Mitra Perguruan Tinggi di Lingkungan LLDIKTI Wilayah IV
            </h2>
            <p class="text-xs sm:text-sm text-[#64748B] mt-2 font-normal">
                Dipercaya oleh puluhan perguruan tinggi swasta, sekolah tinggi, dan akademi di Jawa Barat &amp; Banten.
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3.5 sm:gap-4">
            @foreach($partners->take(18) as $partner)
                <div class="bg-[#F8FAFC] rounded-xl p-3.5 sm:p-4 border border-[#E2E8F0] flex flex-col items-center justify-center text-center transition-colors shadow-2xs hover:border-[#2B3990]">
                    @if($partner->logo)
                        <img src="{{ Storage::url($partner->logo) }}" 
                             alt="{{ $partner->name }}" 
                             class="h-8 w-auto object-contain mb-2 grayscale opacity-75 hover:grayscale-0 hover:opacity-100 transition-all">
                    @else
                        <div class="w-8 h-8 rounded-lg bg-[#EBF3FE] text-[#2B3990] font-bold flex items-center justify-center text-xs mb-1.5">
                            {{ strtoupper(substr($partner->name, 0, 2)) }}
                        </div>
                    @endif
                    <span class="text-xs font-semibold text-[#0F172A] leading-tight line-clamp-2">{{ $partner->name }}</span>
                </div>
            @endforeach
        </div>

    </div>
</section>
@endif

{{-- ==========================================
     6. HUBUNGI KAMI (#kontak)
     ========================================== --}}
<section id="kontak" class="py-14 sm:py-16 lg:py-20 bg-[#F8FAFC] border-b border-[#E2E8F0]">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">

        <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-[#0F172A] tracking-tight leading-tight">
                Hubungi Kami untuk Kebutuhan Kampus Anda
            </h2>
            <p class="text-xs sm:text-sm lg:text-base text-slate-600 mt-2.5 font-normal leading-relaxed max-w-xl mx-auto">
                Diskusikan rencana pengadaan wisuda, seragam konveksi, cinderamata, dan sistem informasi langsung dengan tim Pelayanan Relasi kami.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-stretch">
            
            {{-- Left: Informasi Kantor & Legalitas (6 cols) --}}
            <div class="lg:col-span-6 flex flex-col">
                <div class="bg-white border border-slate-200/90 rounded-2xl sm:rounded-3xl shadow-2xs h-full flex flex-col justify-between overflow-hidden">
                    <div class="p-6 sm:p-8">
                        <div class="border-b border-slate-100 pb-4 mb-5">
                            <h3 class="text-lg sm:text-xl font-bold text-[#0F172A]">
                                Kantor &amp; Workshop
                            </h3>
                            <p class="text-xs sm:text-[13px] text-slate-500 mt-1">
                                Pusat Pelayanan, Administrasi, &amp; Produksi CV. HD Mitra Jaya Abadi
                            </p>
                        </div>

                        <div class="space-y-4">
                            <!-- Alamat -->
                            <div class="flex items-start gap-3.5">
                                <div class="w-9 h-9 rounded-xl bg-[#2B3990]/5 text-[#2B3990] border border-[#2B3990]/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                </div>
                                <div>
                                    <span class="block text-xs font-bold text-[#0F172A] uppercase tracking-wider">Alamat Kantor &amp; Workshop</span>
                                    <p class="text-xs sm:text-sm text-slate-600 mt-0.5 leading-relaxed">
                                        {{ $settings->address ?? 'Jl. Kadipaten 1 No. 1B, Antapani Kidul, Kec. Antapani, Kota Bandung, Jawa Barat 40291' }}
                                    </p>
                                </div>
                            </div>

                            <!-- Legalitas -->
                            <div class="flex items-start gap-3.5 pt-3.5 border-t border-slate-100">
                                <div class="w-9 h-9 rounded-xl bg-[#2B3990]/5 text-[#2B3990] border border-[#2B3990]/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                </div>
                                <div>
                                    <span class="block text-xs font-bold text-[#0F172A] uppercase tracking-wider">Legalitas Perusahaan</span>
                                    <p class="text-xs sm:text-sm text-slate-600 mt-0.5 leading-relaxed">
                                        NIB: <span class="font-mono font-semibold text-slate-800">{{ $settings->nib ?? '2008210031124' }}</span> · Akta Notaris Tina Martina, S.H., M.Kn.
                                    </p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start gap-3.5 pt-3.5 border-t border-slate-100">
                                <div class="w-9 h-9 rounded-xl bg-[#2B3990]/5 text-[#2B3990] border border-[#2B3990]/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </div>
                                <div>
                                    <span class="block text-xs font-bold text-[#0F172A] uppercase tracking-wider">Email Resmi</span>
                                    <a href="mailto:{{ $settings->email ?? 'hdmjabadi@gmail.com' }}" class="text-xs sm:text-sm text-[#2B3990] hover:underline font-medium mt-0.5 block">
                                        {{ $settings->email ?? 'hdmjabadi@gmail.com' }}
                                    </a>
                                </div>
                            </div>

                            <!-- Jam Operasional -->
                            <div class="flex items-start gap-3.5 pt-3.5 border-t border-slate-100">
                                <div class="w-9 h-9 rounded-xl bg-[#2B3990]/5 text-[#2B3990] border border-[#2B3990]/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <div>
                                    <span class="block text-xs font-bold text-[#0F172A] uppercase tracking-wider">Jam Operasional Layanan</span>
                                    <p class="text-xs sm:text-sm text-slate-600 mt-0.5">Senin – Sabtu: 08.00 – 17.00 WIB</p>
                                </div>
                            </div>

                            <!-- Telepon Kantor -->
                            <div class="flex items-start gap-3.5 pt-3.5 border-t border-slate-100">
                                <div class="w-9 h-9 rounded-xl bg-[#2B3990]/5 text-[#2B3990] border border-[#2B3990]/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                </div>
                                <div>
                                    <span class="block text-xs font-bold text-[#0F172A] uppercase tracking-wider">Telepon Kantor</span>
                                    <p class="text-xs sm:text-sm text-slate-800 font-medium mt-0.5">{{ $settings->phone ?? '0812-2256-9863' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left Card Footer Status -->
                    <div class="px-6 py-4 sm:p-5 border-t border-slate-100 bg-slate-50/60 flex items-center justify-between text-xs text-slate-500 shrink-0">
                        <span class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 inline-block animate-pulse"></span>
                            <span class="font-medium text-slate-700">Layanan Aktif Hari Kerja</span>
                        </span>
                        <span class="font-medium text-slate-500">Bandung, Jawa Barat</span>
                    </div>
                </div>
            </div>

            {{-- Right: Google Maps Card (6 cols) --}}
            <div class="lg:col-span-6 flex flex-col">
                <div class="bg-white border border-slate-200/90 rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xs h-full flex flex-col justify-between">
                    @if(!empty($settings->google_maps_url))
                        <div class="flex-1 min-h-[320px] sm:min-h-[360px] w-full">
                            <iframe src="{{ $settings->google_maps_url }}" 
                                    class="w-full h-full border-0 min-h-[320px] sm:min-h-[360px]" 
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade"
                                    title="Peta Lokasi Kantor CV. HD Mitra Jaya Abadi"></iframe>
                        </div>
                    @endif
                    <div class="p-4 sm:p-5 text-center bg-white border-t border-slate-100 shrink-0">
                        <a href="https://maps.google.com/?q={{ urlencode($settings->address ?? 'Jl. Kadipaten 1 No. 1B Bandung') }}" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="text-xs sm:text-sm font-semibold text-[#2B3990] hover:underline inline-flex items-center gap-1.5 transition-colors">
                            <span>Buka di Aplikasi Google Maps</span>
                            <span>↗</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- ==========================================
     Vanilla JS: 6-Item Carousel & Dynamic Category Filtering
     ========================================== --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.portfolio-filter-btn');
        const allCards = Array.from(document.querySelectorAll('.portfolio-item-card'));
        const prevBtn = document.getElementById('portfolio-prev-btn');
        const nextBtn = document.getElementById('portfolio-next-btn');
        const paginationContainer = document.getElementById('portfolio-pagination');
        const pageCounter = document.getElementById('portfolio-page-counter');
        const carouselControls = document.getElementById('portfolio-carousel-controls');

        const ITEMS_PER_PAGE = 6;
        let currentFilter = 'all';
        let currentPage = 0;

        function getFilteredCards() {
            if (currentFilter === 'all') {
                return allCards;
            }
            return allCards.filter(card => card.getAttribute('data-category') === currentFilter);
        }

        function renderPage() {
            const filtered = getFilteredCards();
            const totalPages = Math.ceil(filtered.length / ITEMS_PER_PAGE) || 1;

            if (currentPage >= totalPages) {
                currentPage = Math.max(0, totalPages - 1);
            }

            const startIndex = currentPage * ITEMS_PER_PAGE;
            const endIndex = startIndex + ITEMS_PER_PAGE;

            // Hide all cards first
            allCards.forEach(card => {
                card.style.display = 'none';
            });

            // Show only the 6 items for current page
            filtered.slice(startIndex, endIndex).forEach(card => {
                card.style.display = 'flex';
            });

            // Update Nav Buttons State
            if (prevBtn && nextBtn) {
                prevBtn.disabled = (currentPage === 0);
                nextBtn.disabled = (currentPage >= totalPages - 1);

                // Show/hide arrow controls if total items <= 6
                if (carouselControls) {
                    if (totalPages <= 1) {
                        carouselControls.classList.add('hidden');
                    } else {
                        carouselControls.classList.remove('hidden');
                    }
                }
            }

            // Update Page Counter (e.g., "01 / 04")
            if (pageCounter) {
                pageCounter.textContent = `${String(currentPage + 1).padStart(2, '0')} / ${String(totalPages).padStart(2, '0')}`;
            }

            // Update Pagination Dots
            if (paginationContainer) {
                if (totalPages <= 1) {
                    paginationContainer.innerHTML = '';
                } else {
                    let dotsHtml = '';
                    for (let i = 0; i < totalPages; i++) {
                        const isActive = (i === currentPage);
                        dotsHtml += `
                            <button type="button" 
                                    data-page="${i}" 
                                    aria-label="Halaman Portofolio ${i + 1}"
                                    class="portfolio-dot transition-all duration-300 h-2.5 rounded-full ${isActive ? 'w-8 bg-[#2B3990]' : 'w-2.5 bg-slate-200 hover:bg-slate-300'}">
                            </button>
                        `;
                    }
                    paginationContainer.innerHTML = dotsHtml;

                    // Add click listeners to dots
                    paginationContainer.querySelectorAll('.portfolio-dot').forEach(dot => {
                        dot.addEventListener('click', function() {
                            const targetPage = parseInt(this.getAttribute('data-page'), 10);
                            if (targetPage !== currentPage) {
                                currentPage = targetPage;
                                renderPage();
                                scrollToGrid();
                            }
                        });
                    });
                }
            }
        }

        function scrollToGrid() {
            const grid = document.getElementById('portfolio-grid');
            if (grid) {
                const rect = grid.getBoundingClientRect();
                if (rect.top < 0) {
                    grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function() {
                if (currentPage > 0) {
                    currentPage--;
                    renderPage();
                    scrollToGrid();
                }
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function() {
                const filtered = getFilteredCards();
                const totalPages = Math.ceil(filtered.length / ITEMS_PER_PAGE);
                if (currentPage < totalPages - 1) {
                    currentPage++;
                    renderPage();
                    scrollToGrid();
                }
            });
        }

        // Category Filter Buttons
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                currentFilter = this.getAttribute('data-filter');
                currentPage = 0;

                filterBtns.forEach(b => {
                    b.classList.remove('bg-[#2B3990]', 'text-white');
                    b.classList.add('bg-white', 'text-[#475569]', 'border-slate-200');
                });
                this.classList.add('bg-[#2B3990]', 'text-white');
                this.classList.remove('bg-white', 'text-[#475569]', 'border-slate-200');

                renderPage();
            });
        });

        // Initialize carousel on load
        renderPage();
    });
</script>

@endsection
