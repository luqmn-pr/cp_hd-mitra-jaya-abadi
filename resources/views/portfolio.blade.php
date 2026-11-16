@extends('layouts.app')

@section('title', 'Portofolio Pekerjaan - ' . ($settings->company_name ?? 'CV. HD Mitra Jaya Abadi'))
@section('description', 'Dokumentasi hasil karya dan portofolio proyek pengadaan, konveksi, percetakan, dan sistem informasi untuk perguruan tinggi dan instansi.')

@section('content')

{{-- Page Header --}}
<section class="bg-[#F8FAFC] border-b border-[#E2E8F0] py-14 lg:py-16">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        <span class="section-kicker">BUKTI HASIL PENGERJAAN</span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#0F172A] tracking-tight mt-1">Portfolio Proyek</h1>
        <p class="text-[#64748B] text-base sm:text-lg max-w-2xl mt-4 leading-relaxed font-normal">
            Dokumentasi hasil pekerjaan nyata yang telah kami selesaikan dan dipercayakan oleh berbagai institusi pendidikan tinggi dan instansi.
        </p>
        <nav class="flex items-center gap-2 text-xs sm:text-sm text-[#64748B] mt-6 font-medium">
            <a href="{{ route('home') }}" class="hover:text-[#2B3990] transition-colors">Beranda</a>
            <span class="text-slate-300">/</span>
            <span class="text-[#0F172A] font-semibold">Portofolio</span>
        </nav>
    </div>
</section>

{{-- Portfolio Section --}}
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">

        {{-- Filter Category Pills --}}
        <div class="flex flex-wrap items-center gap-2 mb-12 pb-6 border-b border-[#E2E8F0]">
            <a href="{{ route('portfolio') }}"
               class="px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all {{ empty($activeServiceSlug) ? 'bg-[#2B3990] text-white shadow-2xs' : 'bg-[#F8FAFC] text-[#475569] hover:bg-[#EBF3FE] hover:text-[#2B3990] border border-[#E2E8F0]' }}">
                Semua Bidang
            </a>
            @foreach($services as $srv)
                <a href="{{ route('portfolio', ['kategori' => $srv->slug]) }}"
                   class="px-4 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all {{ $activeServiceSlug === $srv->slug ? 'bg-[#2B3990] text-white shadow-2xs' : 'bg-[#F8FAFC] text-[#475569] hover:bg-[#EBF3FE] hover:text-[#2B3990] border border-[#E2E8F0]' }}">
                    {{ $srv->name }}
                </a>
            @endforeach
        </div>

        @if($portfolios->isEmpty())
            <div class="text-center py-20 bg-[#F8FAFC] rounded-3xl border border-[#E2E8F0] p-8 max-w-xl mx-auto">
                <div class="w-14 h-14 rounded-full bg-white shadow-2xs flex items-center justify-center text-[#2B3990] mx-auto mb-4 border border-[#E2E8F0]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-[#0F172A] mb-1">Belum Ada Portofolio pada Kategori Ini</h3>
                <p class="text-[#64748B] text-xs sm:text-sm max-w-sm mx-auto mb-6">Silakan pilih kategori lain untuk melihat dokumentasi pekerjaan kami.</p>
                <a href="{{ route('portfolio') }}" class="btn-outline text-xs py-2 px-5">Lihat Semua Kategori</a>
            </div>
        @else
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($portfolios as $portfolio)
                    <a href="{{ route('portfolio.detail', $portfolio->slug) }}"
                       class="group bg-white rounded-2xl overflow-hidden border border-[#E2E8F0] hover:border-[#2B3990] transition-all duration-200 block shadow-2xs hover:shadow-md">
                        
                        <!-- Image Container with Category Badge -->
                        <div class="aspect-[16/10] bg-[#F8FAFC] overflow-hidden relative border-b border-[#E2E8F0]">
                            @if($portfolio->cover_image)
                                <img src="{{ Storage::url($portfolio->cover_image) }}" 
                                     alt="{{ $portfolio->title }}"
                                     loading="lazy"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex flex-col items-center justify-center p-6 text-center bg-gradient-to-br from-[#F8FAFC] to-[#EBF3FE]/40">
                                    <div class="w-12 h-12 rounded-full bg-white shadow-2xs flex items-center justify-center text-[#2B3990] mb-2 group-hover:scale-105 transition-transform">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/></svg>
                                    </div>
                                    <span class="text-xs font-semibold text-[#64748B]">{{ $portfolio->service?->name ?? 'Dokumentasi Proyek' }}</span>
                                </div>
                            @endif

                            @if($portfolio->service)
                                <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-md text-xs font-bold text-[#2B3990] border border-[#E2E8F0] shadow-2xs">
                                    {{ $portfolio->service->name }}
                                </span>
                            @endif
                        </div>

                        <!-- Card Body -->
                        <div class="p-6">
                            @if($portfolio->client_name)
                                <div class="text-xs font-semibold text-[#64748B] mb-1.5 flex items-center gap-1.5 uppercase tracking-wider">
                                    <svg class="w-3.5 h-3.5 text-[#2B3990] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                    <span class="truncate">{{ $portfolio->client_name }}</span>
                                </div>
                            @endif

                            <h2 class="font-bold text-[#0F172A] text-base sm:text-lg group-hover:text-[#2B3990] transition-colors leading-snug">
                                {{ $portfolio->title }}
                            </h2>

                            @if($portfolio->excerpt)
                                <p class="text-xs sm:text-sm text-[#475569] mt-2 line-clamp-2 leading-relaxed">
                                    {{ $portfolio->excerpt }}
                                </p>
                            @endif

                            <div class="mt-5 pt-4 border-t border-[#F8FAFC] flex items-center justify-between text-xs font-semibold text-[#2B3990]">
                                <span>Lihat Rincian</span>
                                <span class="group-hover:translate-x-1 transition-transform">→</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- Pagination Links --}}
            @if(method_exists($portfolios, 'hasPages') && $portfolios->hasPages())
                <div class="mt-14 pt-8 border-t border-[#E2E8F0] flex justify-center">
                    {{ $portfolios->links() }}
                </div>
            @endif
        @endif

    </div>
</section>

{{-- Institutional CTA --}}
<section class="py-16 bg-[#EBF3FE] border-t border-[#CBD5E1]/40 text-center">
    <div class="max-w-4xl mx-auto px-4">
        <span class="section-kicker text-[#2B3990]">KONSULTASI SPESIFIKASI</span>
        <h2 class="text-2xl sm:text-3xl font-bold text-[#0F172A] tracking-tight">Ingin Mewujudkan Kebutuhan Pengadaan Serupa?</h2>
        <p class="text-sm sm:text-base text-[#475569] mt-3 max-w-xl mx-auto leading-relaxed">
            Tim kami siap membantu perhitungan estimasi anggaran RAB, pemilihan bahan mutu terbaik, dan sampel fisik untuk instansi Anda.
        </p>
        @php
            $rawWa = $settings->whatsapp ?? '081222569863';
            $waClean = preg_replace('/[^0-9]/', '', $rawWa);
            if (str_starts_with($waClean, '0')) {
                $waClean = '62' . substr($waClean, 1);
            }
            $waPortfoliosUrl = "https://wa.me/{$waClean}?text=" . urlencode("Halo CV. HD Mitra Jaya Abadi, saya tertarik berkonsultasi terkait pengadaan untuk institusi kami.");
        @endphp
        <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="{{ $waPortfoliosUrl }}" target="_blank" rel="noopener noreferrer" class="btn-primary text-sm py-3 px-6 inline-flex items-center gap-2">
                <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                <span>Konsultasi via WhatsApp</span>
            </a>
            <a href="{{ route('home') }}#kontak" class="btn-outline text-sm py-3 px-6">
                Lihat Kontak &amp; Lokasi Kantor
            </a>
        </div>
    </div>
</section>

@endsection
