<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', ($settings->company_name ?? 'CV. HD Mitra Jaya Abadi') . ' - Mitra Pengadaan & Solusi Kampus')</title>
    <meta name="description" content="@yield('description', $settings->tagline ?? 'Mitra terpercaya pengadaan percetakan, konveksi, barang & jasa, serta sistem informasi perguruan tinggi di lingkungan LLDIKTI Wilayah IV.')">

    <!-- Favicon -->
    @if(!empty($settings?->favicon))
        <link rel="icon" type="image/x-icon" href="{{ Storage::url($settings->favicon) }}">
    @endif

    <!-- Typography: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-[#475569] font-sans antialiased selection:bg-[#EBF3FE] selection:text-[#2B3990]">

    <!-- Header / Navigation (Clean, Airy, Centered Links, Official Company Logo) -->
    <header class="w-full bg-white transition-all duration-200">
        <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12 pt-6 pb-3">
            <div class="flex items-center justify-between">
                
                <!-- Left: Official Company Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group" title="{{ $settings?->company_name ?? 'CV. HD Mitra Jaya Abadi' }}">
                    <img src="{{ asset('images/logo-icon.svg') }}" 
                         alt="Logo {{ $settings?->company_name ?? 'CV. HD Mitra Jaya Abadi' }}" 
                         class="w-10 h-10 shrink-0 group-hover:scale-105 transition-transform">
                    <div class="flex flex-col">
                        <span class="font-bold text-[#0F172A] text-base sm:text-lg tracking-tight leading-none group-hover:text-[#2B3990] transition-colors">
                            HD Mitra Jaya
                        </span>
                        <span class="text-[11px] font-semibold text-[#64748B] tracking-wider uppercase mt-1">
                            {{ $settings?->company_name ?? 'CV. HD MITRA JAYA ABADI' }}
                        </span>
                    </div>
                </a>

                <!-- Center: Desktop Navigation Links (Uniform, Sharp, Airy Spacing) -->
                <nav class="hidden md:flex items-center gap-6 lg:gap-8 xl:gap-10" aria-label="Main Navigation">
                    <a href="{{ route('home') }}#beranda" 
                       class="text-sm font-medium text-[#0F172A] hover:text-[#2B3990] transition-colors">
                        Beranda
                    </a>
                    <a href="{{ route('home') }}#tentang-kami" 
                       class="text-sm font-medium text-[#0F172A] hover:text-[#2B3990] transition-colors">
                        Tentang Kami
                    </a>
                    <a href="{{ route('home') }}#layanan" 
                       class="text-sm font-medium text-[#0F172A] hover:text-[#2B3990] transition-colors">
                        Layanan Kami
                    </a>
                    <a href="{{ route('home') }}#portofolio" 
                       class="text-sm font-medium text-[#0F172A] hover:text-[#2B3990] transition-colors">
                        Portofolio
                    </a>
                    <a href="{{ route('home') }}#kontak" 
                       class="text-sm font-medium text-[#0F172A] hover:text-[#2B3990] transition-colors">
                        Kontak
                    </a>
                </nav>

                @php
                    $rawWa = $settings->whatsapp ?? '0812-2256-9863';
                    $waClean = preg_replace('/[^0-9]/', '', $rawWa);
                    if (str_starts_with($waClean, '0')) {
                        $waClean = '62' . substr($waClean, 1);
                    }
                    $waDirectUrl = "https://wa.me/{$waClean}?text=" . urlencode("Halo CV. HD Mitra Jaya Abadi, saya ingin berkonsultasi terkait kebutuhan pengadaan kampus.");
                @endphp

                <!-- Right: Header Actions (CTA - Royal Navy Pill Button) -->
                <div class="hidden md:flex items-center">
                    <a href="{{ $waDirectUrl }}" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-[#2B3990] hover:bg-[#1E2870] text-white font-medium text-xs sm:text-sm shadow-xs hover:shadow transition-all duration-200">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <span>Hubungi Kami</span>
                    </a>
                </div>

                <!-- Mobile Hamburger Button -->
                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-btn" 
                            type="button"
                            aria-expanded="false" 
                            aria-label="Toggle navigation menu"
                            class="p-2.5 rounded-xl text-[#0F172A] hover:bg-slate-100 transition-colors focus:outline-hidden focus:ring-2 focus:ring-[#2B3990]">
                        <svg class="w-6 h-6" id="hamburger-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg class="w-6 h-6 hidden" id="close-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Drawer -->
            <div id="mobile-menu" class="hidden md:hidden border-t border-slate-100 bg-white px-2 pt-3 pb-4 transition-all mt-3">
                <nav class="flex flex-col gap-1" aria-label="Mobile Navigation">
                    <a href="{{ route('home') }}#beranda" 
                       class="mobile-nav-link px-4 py-2.5 rounded-xl text-sm font-medium transition-colors text-[#0F172A] hover:bg-slate-50">
                        Beranda
                    </a>
                    <a href="{{ route('home') }}#tentang-kami" 
                       class="mobile-nav-link px-4 py-2.5 rounded-xl text-sm font-medium transition-colors text-[#0F172A] hover:bg-slate-50">
                        Tentang Kami
                    </a>
                    <a href="{{ route('home') }}#layanan" 
                       class="mobile-nav-link px-4 py-2.5 rounded-xl text-sm font-medium transition-colors text-[#0F172A] hover:bg-slate-50">
                        Layanan Kami
                    </a>
                    <a href="{{ route('home') }}#portofolio" 
                       class="mobile-nav-link px-4 py-2.5 rounded-xl text-sm font-medium transition-colors text-[#0F172A] hover:bg-slate-50">
                        Portofolio
                    </a>
                    <a href="{{ route('home') }}#kontak" 
                       class="mobile-nav-link px-4 py-2.5 rounded-xl text-sm font-medium transition-colors text-[#0F172A] hover:bg-slate-50">
                        Kontak
                    </a>

                    <div class="pt-3 mt-1 border-t border-slate-100">
                        <a href="{{ $waDirectUrl }}" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="mobile-nav-link inline-flex items-center justify-center gap-2 w-full py-3 rounded-full bg-[#2B3990] hover:bg-[#1E2870] text-white font-medium text-sm shadow-xs transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>Hubungi Kami via WhatsApp</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Mobile Backdrop Overlay -->
    <div id="mobile-backdrop" class="fixed inset-0 bg-slate-900/40 z-30 hidden md:hidden transition-opacity"></div>

    <!-- Main Page Content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Clean Modern 4-Column Footer (FigCraft Style) -->
    <footer class="bg-white text-[#475569] border-t border-[#E2E8F0]">
        <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12 pt-14 pb-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8">
                
                <!-- Col 1: Company Identity (4 cols) -->
                <div class="lg:col-span-4">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('images/logo-icon.svg') }}" 
                             alt="Logo {{ $settings?->company_name ?? 'CV. HD Mitra Jaya Abadi' }}" 
                             class="w-9 h-9 shrink-0">
                        <span class="font-bold text-[#0F172A] text-lg tracking-tight">
                            HD Mitra Jaya
                        </span>
                    </div>

                    <span class="block text-xs font-semibold text-[#64748B] mb-2 uppercase tracking-wider">
                        {{ $settings?->company_name ?? 'CV. HD MITRA JAYA ABADI' }}
                    </span>

                    <p class="text-[#64748B] text-sm leading-relaxed max-w-md">
                        {{ $settings?->footer_description ?? 'Mitra terpercaya pengadaan percetakan, konveksi seragam, barang & jasa, serta sistem informasi perguruan tinggi dan instansi di lingkungan LLDIKTI Wilayah IV.' }}
                    </p>

                    @if(!empty($settings?->social_links))
                        <div class="flex items-center gap-2 mt-6">
                            @foreach($settings->social_links as $social)
                                @if(!empty($social['url']))
                                    @php
                                        $platform = strtolower($social['platform'] ?? '');
                                    @endphp
                                    <a href="{{ $social['url'] }}" 
                                       target="_blank" 
                                       rel="noopener noreferrer" 
                                       aria-label="{{ $social['platform'] ?? 'Social' }}"
                                       class="w-9 h-9 rounded-full bg-[#F8FAFC] border border-[#E2E8F0] hover:border-[#2B3990] hover:bg-[#EBF3FE] text-[#64748B] hover:text-[#2B3990] flex items-center justify-center transition-colors">
                                        @if(str_contains($platform, 'insta'))
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                        @elseif(str_contains($platform, 'face'))
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                        @elseif(str_contains($platform, 'link'))
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                        @else
                                            <span class="text-xs font-bold">{{ strtoupper(substr($social['platform'] ?? 'S', 0, 2)) }}</span>
                                        @endif
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Col 2: Layanan Institusi (3 cols) -->
                <div class="lg:col-span-3">
                    <h3 class="text-xs font-bold text-[#0F172A] uppercase tracking-wider mb-4">Layanan Institusi</h3>
                    <ul class="space-y-2.5 text-sm text-[#64748B]">
                        <li>
                            <a href="{{ route('service.detail', 'percetakan') }}" class="hover:text-[#2B3990] transition-colors">
                                Percetakan & Map Ijazah
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('service.detail', 'konveksi') }}" class="hover:text-[#2B3990] transition-colors">
                                Paket Toga & Konveksi
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('service.detail', 'pengadaan-barang-jasa-lainnya') }}" class="hover:text-[#2B3990] transition-colors">
                                Pengadaan Barang/Jasa Lainnya
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('service.detail', 'sistem-informasi') }}" class="hover:text-[#2B3990] transition-colors">
                                Sistem Informasi SIAKAD
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}" class="hover:text-[#2B3990] transition-colors">
                                Buku Wisuda & Sertifikat
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Col 3: Navigasi Halaman (2 cols) -->
                <div class="lg:col-span-2">
                    <h3 class="text-xs font-bold text-[#0F172A] uppercase tracking-wider mb-4">Navigasi Halaman</h3>
                    <ul class="space-y-2.5 text-sm text-[#64748B]">
                        <li><a href="{{ route('home') }}#beranda" class="hover:text-[#2B3990] transition-colors">Beranda</a></li>
                        <li><a href="{{ route('home') }}#tentang-kami" class="hover:text-[#2B3990] transition-colors">Profil Perusahaan</a></li>
                        <li><a href="{{ route('home') }}#layanan" class="hover:text-[#2B3990] transition-colors">Layanan Kami</a></li>
                        <li><a href="{{ route('home') }}#portofolio" class="hover:text-[#2B3990] transition-colors">Portofolio Perusahaan</a></li>
                        <li><a href="{{ route('home') }}#kontak" class="hover:text-[#2B3990] transition-colors">Kontak &amp; Lokasi</a></li>
                    </ul>
                </div>

                <!-- Col 4: Kantor & Workshop (3 cols) -->
                <div class="lg:col-span-3">
                    <h3 class="text-xs font-bold text-[#0F172A] uppercase tracking-wider mb-4">Kantor &amp; Workshop</h3>
                    <div class="space-y-2.5 text-xs sm:text-sm text-[#64748B]">
                        <div>
                            <span class="block text-xs font-semibold text-[#0F172A]">Alamat Kantor</span>
                            <p class="leading-relaxed text-xs mt-0.5">
                                {{ $settings->address ?? 'Jl. Kadipaten 1 No. 1B, Antapani, Bandung' }}
                            </p>
                        </div>
                        <div>
                            <span class="block text-xs font-semibold text-[#0F172A]">NIB Legalitas</span>
                            <span class="text-xs font-mono font-medium text-slate-800">{{ $settings->nib ?? '2008210031124' }}</span>
                        </div>
                        <div>
                            <span class="block text-xs font-semibold text-[#0F172A]">Pimpinan</span>
                            <span class="text-xs">{{ $settings->director_name ?? 'Devi Indriyani' }} ({{ $settings->director_title ?? 'Direktur' }})</span>
                        </div>
                        <div>
                            <span class="block text-xs font-semibold text-[#0F172A]">Email Resmi</span>
                            <a href="mailto:{{ $settings->email ?? 'hdmjabadi@gmail.com' }}" class="text-xs hover:text-[#2B3990] transition-colors break-all">
                                {{ $settings->email ?? 'hdmjabadi@gmail.com' }}
                            </a>
                        </div>
                        <div>
                            <span class="block text-xs font-semibold text-[#0F172A]">Telepon Kantor</span>
                            <span class="text-xs font-medium text-slate-800">{{ $settings->phone ?? '0812-2256-9863' }}</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Legal Bar -->
            <div class="mt-12 pt-8 border-t border-[#F1F5F9] flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-[#94A3B8]">
                <p>&copy; {{ date('Y') }} {{ $settings?->company_name ?? 'CV. HD Mitra Jaya Abadi' }}. Hak Cipta Dilindungi Undang-Undang.</p>
                <p class="text-right">Solusi Pengadaan Kampus & Sistem Informasi</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle with backdrop dismiss
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const backdrop = document.getElementById('mobile-backdrop');
        const hamburger = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        function toggleMenu(show) {
            const isCurrentlyHidden = menu.classList.contains('hidden');
            const targetState = typeof show === 'boolean' ? show : isCurrentlyHidden;

            if (targetState) {
                menu.classList.remove('hidden');
                backdrop?.classList.remove('hidden');
                hamburger?.classList.add('hidden');
                closeIcon?.classList.remove('hidden');
                btn?.setAttribute('aria-expanded', 'true');
            } else {
                menu.classList.add('hidden');
                backdrop?.classList.add('hidden');
                hamburger?.classList.remove('hidden');
                closeIcon?.classList.add('hidden');
                btn?.setAttribute('aria-expanded', 'false');
            }
        }

        btn?.addEventListener('click', () => toggleMenu());
        backdrop?.addEventListener('click', () => toggleMenu(false));

        // Auto close mobile menu when clicking any mobile nav link
        document.querySelectorAll('.mobile-nav-link').forEach(link => {
            link.addEventListener('click', () => toggleMenu(false));
        });
    </script>
</body>
</html>
