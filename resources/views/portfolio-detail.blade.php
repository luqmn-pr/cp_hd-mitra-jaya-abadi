@extends('layouts.app')

@section('title', ($portfolio->meta_title ?? $portfolio->title) . ' - ' . ($settings->company_name ?? 'CV. HD Mitra Jaya Abadi'))
@section('description', $portfolio->meta_description ?? $portfolio->excerpt)

@section('content')

{{-- Page Header --}}
<section class="bg-[#F8FAFC] border-b border-[#E2E8F0] py-14 lg:py-16">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        @if($portfolio->service)
            <span class="section-eyebrow">{{ $portfolio->service->name }}</span>
        @endif
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#0F172A] tracking-tight mt-1 leading-tight">{{ $portfolio->title }}</h1>
        
        @if($portfolio->client_name || $portfolio->project_date)
            <div class="flex flex-wrap items-center gap-5 mt-4 text-xs sm:text-sm text-[#64748B]">
                @if($portfolio->client_name)
                    <span class="flex items-center gap-1.5 font-medium">
                        <svg class="w-4 h-4 text-[#2B3990]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        {{ $portfolio->client_name }}
                    </span>
                @endif
                @if($portfolio->project_date)
                    <span class="flex items-center gap-1.5 font-medium">
                        <svg class="w-4 h-4 text-[#2B3990]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        {{ \Carbon\Carbon::parse($portfolio->project_date)->translatedFormat('F Y') }}
                    </span>
                @endif
            </div>
        @endif

        <nav class="flex items-center gap-2 text-xs sm:text-sm text-[#64748B] mt-6 flex-wrap font-medium">
            <a href="{{ route('home') }}" class="hover:text-[#2B3990] transition-colors">Beranda</a>
            <svg class="w-3.5 h-3.5 text-[#94A3B8]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ route('portfolio') }}" class="hover:text-[#2B3990] transition-colors">Portofolio</a>
            <svg class="w-3.5 h-3.5 text-[#94A3B8]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-[#0F172A] truncate max-w-xs">{{ $portfolio->title }}</span>
        </nav>
    </div>
</section>

{{-- Cover Image --}}
@if($portfolio->cover_image)
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12 mt-8 -mb-6">
        <div class="rounded-3xl overflow-hidden aspect-[16/7] border border-[#E2E8F0] shadow-sm bg-white">
            <img src="{{ Storage::url($portfolio->cover_image) }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover">
        </div>
    </div>
@endif

{{-- Main Content Section --}}
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-14">
            
            {{-- Main Column (8 cols) --}}
            <div class="lg:col-span-8">
                @if($portfolio->description)
                    <div class="prose max-w-none">
                        <h2 class="text-2xl font-bold text-[#0F172A] mb-4">Ringkasan Pekerjaan</h2>
                        <div class="text-[#475569] leading-relaxed text-base sm:text-lg whitespace-pre-line font-normal">
                            {{ $portfolio->description }}
                        </div>
                    </div>
                @endif

                {{-- Image Gallery --}}
                @if($portfolio->images->isNotEmpty())
                    <div class="mt-12 pt-10 border-t border-[#E2E8F0]">
                        <h2 class="text-xl sm:text-2xl font-bold text-[#0F172A] mb-6">Galeri Dokumentasi</h2>
                        <div class="grid sm:grid-cols-2 gap-4">
                            @foreach($portfolio->images as $image)
                                <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#F8FAFC] border border-[#E2E8F0]">
                                    <img src="{{ Storage::url($image->path) }}" 
                                         alt="{{ $image->caption ?? $portfolio->title }}"
                                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            {{-- Sidebar Column (4 cols) --}}
            <div class="lg:col-span-4">
                <div class="bg-[#F8FAFC] border border-[#E2E8F0] rounded-2xl p-6 sm:p-7 sticky top-28 shadow-sm">
                    <span class="section-eyebrow mb-2">SPESIFIKASI PROYEK</span>
                    <h3 class="font-bold text-[#0F172A] text-xl mb-4">Informasi Pekerjaan</h3>
                    
                    <dl class="space-y-4 text-xs sm:text-sm border-t border-[#E2E8F0] pt-4">
                        @if($portfolio->client_name)
                            <div>
                                <dt class="text-[#64748B] text-xs uppercase tracking-wider mb-0.5 font-medium">Klien / Lembaga</dt>
                                <dd class="font-bold text-[#0F172A]">{{ $portfolio->client_name }}</dd>
                            </div>
                        @endif

                        @if($portfolio->service)
                            <div>
                                <dt class="text-[#64748B] text-xs uppercase tracking-wider mb-0.5 font-medium">Kategori Layanan</dt>
                                <dd>
                                    <a href="{{ route('service.detail', $portfolio->service->slug) }}" class="font-bold text-[#2B3990] hover:underline">
                                        {{ $portfolio->service->name }}
                                    </a>
                                </dd>
                            </div>
                        @endif

                        @if($portfolio->project_date)
                            <div>
                                <dt class="text-[#64748B] text-xs uppercase tracking-wider mb-0.5 font-medium">Waktu Pelaksanaan</dt>
                                <dd class="font-bold text-[#0F172A]">{{ \Carbon\Carbon::parse($portfolio->project_date)->translatedFormat('F Y') }}</dd>
                            </div>
                        @endif
                    </dl>

                    @php
                        $rawWa = $settings->whatsapp ?? '081222569863';
                        $waClean = preg_replace('/[^0-9]/', '', $rawWa);
                        if (str_starts_with($waClean, '0')) {
                            $waClean = '62' . substr($waClean, 1);
                        }
                        $waPortfolioUrl = "https://wa.me/{$waClean}?text=" . urlencode("Halo CV. HD Mitra Jaya Abadi, saya tertarik berkonsultasi dan meminta penawaran untuk pekerjaan serupa: " . $portfolio->title);
                    @endphp

                    <div class="mt-8 pt-6 border-t border-[#E2E8F0]">
                        <p class="text-xs text-[#475569] mb-4 leading-relaxed font-normal">Tertarik dengan spesifikasi pekerjaan serupa untuk institusi Anda? Diskusikan langsung melalui WhatsApp.</p>
                        <a href="{{ $waPortfolioUrl }}"
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="btn-primary w-full justify-center text-sm py-3.5 shadow-sm inline-flex items-center gap-2 mb-2.5">
                            <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            <span>Konsultasi via WhatsApp</span>
                        </a>
                        <a href="{{ route('home') }}#kontak" class="btn-outline w-full justify-center text-xs py-2.5">
                            <span>Lihat Lokasi &amp; Kontak Kantor</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Related Portfolios --}}
@if($relatedPortfolios->isNotEmpty())
<section class="py-16 bg-[#F8FAFC] border-t border-[#E2E8F0]">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        <h2 class="text-2xl font-bold text-[#0F172A] mb-8">Pekerjaan Terkait Lainnya</h2>
        <div class="grid sm:grid-cols-3 gap-6">
            @foreach($relatedPortfolios as $related)
                <a href="{{ route('portfolio.detail', $related->slug) }}" class="group bg-white rounded-2xl overflow-hidden border border-[#E2E8F0] hover:border-[#2B3990] transition-all shadow-sm hover:shadow-md">
                    <div class="aspect-[16/10] bg-[#F8FAFC] overflow-hidden border-b border-[#E2E8F0]">
                        @if($related->cover_image)
                            <img src="{{ Storage::url($related->cover_image) }}" alt="{{ $related->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        @else
                            <div class="w-full h-full flex items-center justify-center">
                                <svg class="w-10 h-10 text-[#2B3990]/40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                            </div>
                        @endif
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-[#0F172A] text-sm group-hover:text-[#2B3990] transition-colors leading-snug line-clamp-2">{{ $related->title }}</h3>
                        @if($related->client_name)
                            <p class="text-xs text-[#64748B] mt-1">{{ $related->client_name }}</p>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
