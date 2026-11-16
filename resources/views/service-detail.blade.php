@extends('layouts.app')

@section('title', ($service->meta_title ?? $service->name) . ' - ' . ($settings->company_name ?? 'CV. HD Mitra Jaya Abadi'))
@section('description', $service->meta_description ?? $service->short_description)

@section('content')

{{-- Page Header --}}
<section class="bg-[#F8FAFC] border-b border-[#E2E8F0] py-14 lg:py-16">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        <span class="section-kicker">BIDANG LAYANAN</span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#0F172A] tracking-tight mt-1">{{ $service->name }}</h1>
        <p class="text-[#64748B] text-base sm:text-lg max-w-2xl mt-4 leading-relaxed font-normal">{{ $service->short_description }}</p>
        
        <nav class="flex items-center gap-2 text-xs sm:text-sm text-[#64748B] mt-6 flex-wrap font-medium">
            <a href="{{ route('home') }}" class="hover:text-[#2B3990] transition-colors">Beranda</a>
            <span class="text-slate-300">/</span>
            <a href="{{ route('services') }}" class="hover:text-[#2B3990] transition-colors">Layanan</a>
            <span class="text-slate-300">/</span>
            <span class="text-[#0F172A] font-semibold">{{ $service->name }}</span>
        </nav>
    </div>
</section>

{{-- Optional Hero Image --}}
@if($service->hero_image)
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12 -mb-6 mt-8">
        <div class="rounded-3xl overflow-hidden aspect-[16/6] border border-[#E2E8F0]">
            <img src="{{ Storage::url($service->hero_image) }}" alt="{{ $service->name }}" class="w-full h-full object-cover">
        </div>
    </div>
@endif

{{-- Detail Content --}}
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-14">
            
            {{-- Main Content (8 cols) --}}
            <div class="lg:col-span-8">
                <div class="prose max-w-none">
                    <h2 class="text-2xl font-bold text-[#0F172A] mb-4">Deskripsi Layanan</h2>
                    <div class="text-[#475569] leading-relaxed text-base sm:text-lg whitespace-pre-line font-normal">
                        {{ $service->description }}
                    </div>
                </div>

                @if($service->features->isNotEmpty())
                    <div class="mt-12 pt-10 border-t border-[#E2E8F0]">
                        <h2 class="text-xl sm:text-2xl font-bold text-[#0F172A] mb-6">Spesifikasi &amp; Pilihan Produk</h2>
                        <div class="grid sm:grid-cols-2 gap-4">
                            @foreach($service->features as $feature)
                                <div class="bg-[#F8FAFC] border border-[#E2E8F0] rounded-2xl p-5 flex items-start gap-3.5">
                                    <div class="w-6 h-6 bg-[#2B3990] text-white rounded-full flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">
                                        ✓
                                    </div>
                                    <div>
                                        <div class="font-bold text-[#0F172A] text-sm">{{ $feature->title }}</div>
                                        @if($feature->description)
                                            <div class="text-xs text-[#64748B] mt-1 leading-relaxed">{{ $feature->description }}</div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- Portofolio Bidang Layanan Ini --}}
                <div class="mt-12 pt-10 border-t border-[#E2E8F0]">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h2 class="text-xl sm:text-2xl font-bold text-[#0F172A]">Portofolio {{ $service->name }}</h2>
                        </div>
                        @if($portfolios->isNotEmpty())
                            <a href="{{ route('portfolio', ['kategori' => $service->slug]) }}" class="text-xs sm:text-sm font-semibold text-[#2B3990] hover:underline hidden sm:inline-flex items-center gap-1">
                                <span>Lihat Semua</span>
                                <span>→</span>
                            </a>
                        @endif
                    </div>

                    @if($portfolios->isNotEmpty())
                        <div class="grid sm:grid-cols-2 gap-5">
                            @foreach($portfolios as $item)
                                <div class="bg-[#F8FAFC] border border-[#E2E8F0] hover:border-[#2B3990]/60 rounded-2xl overflow-hidden transition-all duration-200 group flex flex-col justify-between shadow-2xs hover:shadow-xs">
                                    <div>
                                        <div class="aspect-[16/10] bg-slate-100 overflow-hidden relative border-b border-[#E2E8F0]">
                                            @if($item->cover_image)
                                                <img src="{{ Storage::url($item->cover_image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center bg-slate-100">
                                                    <span class="text-slate-400 text-xs font-medium">{{ $service->name }}</span>
                                                </div>
                                            @endif
                                            @if($item->client_name)
                                                <div class="absolute top-3 left-3 bg-white/95 backdrop-blur-xs text-[#0F172A] text-[11px] font-semibold px-2.5 py-1 rounded-md shadow-2xs border border-slate-200/80">
                                                    {{ $item->client_name }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="p-4 sm:p-5">
                                            <h3 class="font-bold text-[#0F172A] text-sm sm:text-base group-hover:text-[#2B3990] transition-colors leading-snug line-clamp-2">
                                                <a href="{{ route('portfolio.detail', $item->slug) }}">
                                                    {{ $item->title }}
                                                </a>
                                            </h3>
                                            @if($item->excerpt)
                                                <p class="text-xs text-[#64748B] mt-2 line-clamp-2 leading-relaxed font-normal">
                                                    {{ $item->excerpt }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="px-4 pb-4 sm:px-5 sm:pb-5 pt-0 mt-auto">
                                        <div class="pt-3 border-t border-slate-200/80 flex items-center justify-between text-xs">
                                            <a href="{{ route('portfolio.detail', $item->slug) }}" class="font-semibold text-[#2B3990] hover:underline inline-flex items-center gap-1">
                                                <span>Rincian Proyek</span>
                                                <span>→</span>
                                            </a>
                                            @if($item->project_date)
                                                <span class="text-[11px] text-[#64748B] font-medium">
                                                    {{ \Carbon\Carbon::parse($item->project_date)->translatedFormat('M Y') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="bg-[#F8FAFC] p-6 rounded-2xl border border-[#E2E8F0] text-center text-xs sm:text-sm text-[#64748B]">
                            Portofolio pengerjaan {{ $service->name }} sedang diperbarui. Hubungi kami untuk katalog fisik dan sampel.
                        </div>
                    @endif
                </div>
            </div>

            {{-- Sidebar CTA & Quick Info (4 cols) --}}
            <div class="lg:col-span-4">
                <div class="bg-[#F8FAFC] border border-[#E2E8F0] rounded-3xl p-6 sm:p-7 sticky top-28 shadow-2xs">
                    <span class="section-kicker mb-2">KONSULTASI SPESIFIKASI</span>
                    <h3 class="font-bold text-[#0F172A] text-xl mb-3">Butuh Penawaran Harga?</h3>
                    <p class="text-[#64748B] text-xs sm:text-sm leading-relaxed mb-6 font-normal">
                        Dapatkan estimasi biaya resmi, sampel katalog bahan, atau konsultasi kebutuhan untuk institusi Anda langsung via WhatsApp.
                    </p>

                    @php
                        $rawWa = $settings->whatsapp ?? '081222569863';
                        $waClean = preg_replace('/[^0-9]/', '', $rawWa);
                        if (str_starts_with($waClean, '0')) {
                            $waClean = '62' . substr($waClean, 1);
                        }
                        $waServiceUrl = "https://wa.me/{$waClean}?text=" . urlencode("Halo CV. HD Mitra Jaya Abadi, saya ingin berkonsultasi dan meminta penawaran untuk layanan " . $service->name . ".");
                    @endphp

                    <a href="{{ $waServiceUrl }}"
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="btn-primary w-full justify-center text-sm py-3.5 shadow-sm inline-flex items-center gap-2 mb-3">
                        <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span>Konsultasi &amp; Penawaran WhatsApp</span>
                    </a>

                    <a href="{{ route('home') }}#kontak" class="btn-outline w-full justify-center text-xs py-2.5">
                        <span>Lihat Lokasi &amp; Kontak Kantor</span>
                    </a>

                    <div class="mt-6 pt-6 border-t border-[#E2E8F0]">
                        <h4 class="font-bold text-[#0F172A] text-xs uppercase tracking-wider mb-3">Layanan Lainnya</h4>
                        <div class="space-y-2">
                            @foreach(\App\Models\Service::where('is_active', true)->where('slug', '!=', $service->slug)->orderBy('sort_order')->get() as $other)
                                <a href="{{ route('service.detail', $other->slug) }}" class="flex items-center justify-between text-xs sm:text-sm text-[#475569] hover:text-[#2B3990] py-1 transition-colors">
                                    <span>{{ $other->name }}</span>
                                    <span>→</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Section Contoh Produk Lain yang Dapat Dipesan --}}
@if(!empty($otherProducts))
<section class="py-14 lg:py-16 bg-[#F8FAFC] border-t border-[#E2E8F0]">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        <div class="mb-8 sm:mb-10 text-center sm:text-left">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0F172A] tracking-tight">
                Contoh Produk Lainnya
            </h2>
            <p class="text-xs sm:text-sm text-[#64748B] mt-1.5 font-normal">
                Pilihan produk {{ strtolower($service->name) }} lainnya yang dapat Anda pesan untuk kebutuhan kampus dan institusi.
            </p>
        </div>

        @php
            $rawWa = $settings->whatsapp ?? '081222569863';
            $waClean = preg_replace('/[^0-9]/', '', $rawWa);
            if (str_starts_with($waClean, '0')) {
                $waClean = '62' . substr($waClean, 1);
            }
        @endphp

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-5">
            @foreach($otherProducts as $product)
                @php
                    $waProductUrl = "https://wa.me/{$waClean}?text=" . urlencode("Halo CV. HD Mitra Jaya Abadi, saya tertarik berkonsultasi mengenai produk: " . $product['title'] . " (Layanan " . $service->name . ") untuk kebutuhan kampus kami.");
                @endphp
                <a href="{{ $waProductUrl }}" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="group bg-white rounded-2xl overflow-hidden border border-[#E2E8F0] hover:border-[#2B3990] transition-all duration-200 shadow-2xs hover:shadow-md flex flex-col">
                    <div class="aspect-square bg-slate-100 overflow-hidden relative border-b border-[#E2E8F0]">
                        <img src="{{ asset($product['image']) }}" 
                             alt="{{ $product['title'] }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-3 sm:p-3.5 text-center flex-1 flex items-center justify-center">
                        <h4 class="font-bold text-[#0F172A] text-xs sm:text-sm group-hover:text-[#2B3990] transition-colors leading-snug">
                            {{ $product['title'] }}
                        </h4>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
