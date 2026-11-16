@extends('layouts.app')

@section('title', 'Layanan Kami - ' . ($settings->company_name ?? 'CV. HD Mitra Jaya Abadi'))
@section('description', 'Layanan profesional percetakan, konveksi, pengadaan barang/jasa, dan sistem informasi untuk instansi dan perguruan tinggi.')

@section('content')

{{-- Page Header --}}
<section class="bg-[#F8FAFC] border-b border-[#E2E8F0] py-14 lg:py-16">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        <span class="section-kicker">BIDANG LAYANAN RESMI</span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#0F172A] tracking-tight mt-1">Layanan Kami</h1>
        <p class="text-[#64748B] text-base sm:text-lg max-w-2xl mt-4 leading-relaxed font-normal">
            Empat pilar layanan terpadu yang dirancang untuk menjawab seluruh kebutuhan pengadaan, konveksi seragam, dokumen cetak, dan digitalisasi institusi Anda.
        </p>
        <nav class="flex items-center gap-2 text-xs sm:text-sm text-[#64748B] mt-6 font-medium">
            <a href="{{ route('home') }}" class="hover:text-[#2B3990] transition-colors">Beranda</a>
            <span class="text-slate-300">/</span>
            <span class="text-[#0F172A] font-semibold">Layanan</span>
        </nav>
    </div>
</section>

{{-- Services Grid --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        @php
            $serviceIcons = [
                'percetakan' => 'M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z',
                'konveksi' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                'pengadaan-barang-jasa-lainnya' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                'sistem-informasi' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
            ];
            $serviceThumbnails = [
                'percetakan' => asset('images/product-3-map.jpg'),
                'konveksi' => asset('images/product-2-toga.jpg'),
                'pengadaan-barang-jasa-lainnya' => asset('images/product-1-trophy.jpg'),
                'sistem-informasi' => null,
            ];
            $index = 1;
        @endphp

        <div class="grid md:grid-cols-2 gap-8">
            @foreach($services as $service)
                <div class="bg-white rounded-2xl overflow-hidden border border-[#E2E8F0] hover:border-[#2B3990] transition-all duration-200 flex flex-col justify-between group shadow-2xs hover:shadow-md">
                    @if(!empty($serviceThumbnails[$service->slug]))
                        <div class="aspect-[16/7] overflow-hidden bg-slate-100 relative border-b border-[#E2E8F0]">
                            <img src="{{ $serviceThumbnails[$service->slug] }}" 
                                 alt="{{ $service->name }}"
                                 loading="lazy"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-3.5 left-3.5 bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-md text-xs font-bold text-[#2B3990] border border-[#E2E8F0]">
                                0{{ $index++ }}
                            </span>
                        </div>
                    @endif
                    <div class="p-8 sm:p-10 flex-1 flex flex-col justify-between">
                        <div>
                            @if(empty($serviceThumbnails[$service->slug]))
                                <!-- Header Card without image -->
                                <div class="flex items-start justify-between gap-4 mb-6">
                                    <div class="w-12 h-12 bg-[#F8FAFC] group-hover:bg-[#2B3990] rounded-xl flex items-center justify-center transition-colors text-[#0F172A] group-hover:text-white shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $serviceIcons[$service->slug] ?? 'M5 13l4 4L19 7' }}"/>
                                        </svg>
                                    </div>
                                    <span class="text-xs font-mono font-semibold text-[#64748B] bg-[#F8FAFC] px-3 py-1 rounded-full border border-[#E2E8F0]">
                                        0{{ $index++ }}
                                    </span>
                                </div>
                            @endif

                            <h2 class="text-2xl font-bold text-[#0F172A] group-hover:text-[#2B3990] transition-colors mb-3 leading-snug">
                                {{ $service->name }}
                            </h2>

                            <p class="text-[#475569] text-sm sm:text-base leading-relaxed mb-6 font-normal">
                                {{ $service->short_description }}
                            </p>

                            <!-- Features list -->
                            @if($service->features->isNotEmpty())
                                <div class="space-y-3 mb-8 pt-6 border-t border-[#F8FAFC]">
                                    <div class="text-xs font-bold uppercase tracking-wider text-[#64748B]">Cakupan Produk &amp; Solusi:</div>
                                    @foreach($service->features->take(4) as $feature)
                                        <div class="flex items-start gap-2.5 text-xs sm:text-sm text-[#475569]">
                                            <div class="w-4 h-4 rounded-full bg-[#EBF3FE] text-[#2B3990] flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">
                                                ✓
                                            </div>
                                            <span><strong class="font-semibold text-[#0F172A]">{{ $feature->title }}</strong> — {{ $feature->description }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <div class="pt-6 border-t border-[#E2E8F0] flex items-center justify-between gap-4">
                            <a href="{{ route('service.detail', $service->slug) }}"
                               class="inline-flex items-center gap-1.5 text-[#2B3990] font-bold hover:underline transition-colors text-sm">
                                <span>Lihat Rincian Layanan</span>
                                <span>→</span>
                            </a>

                            @php
                                $rawWaItem = $settings->whatsapp ?? '081222569863';
                                $waCleanItem = preg_replace('/[^0-9]/', '', $rawWaItem);
                                if (str_starts_with($waCleanItem, '0')) {
                                    $waCleanItem = '62' . substr($waCleanItem, 1);
                                }
                                $waItemUrl = "https://wa.me/{$waCleanItem}?text=" . urlencode("Halo CV. HD Mitra Jaya Abadi, saya ingin berkonsultasi mengenai pengadaan " . $service->name . ".");
                            @endphp

                            <a href="{{ $waItemUrl }}" target="_blank" rel="noopener noreferrer" class="btn-outline text-xs py-2 px-3.5 inline-flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 fill-current shrink-0" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                                <span>WhatsApp</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Minimalist Institutional CTA --}}
<section class="py-16 bg-[#EBF3FE] border-t border-[#CBD5E1]/40">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
        <span class="section-kicker text-[#2B3990]">PENGADAAN KHUSUS</span>
        <h2 class="text-2xl sm:text-3xl font-bold text-[#0F172A] tracking-tight">Butuh Pengadaan Sesuai Kerangka Acuan Kerja (KAK)?</h2>
        <p class="text-sm sm:text-base text-[#475569] mt-3 max-w-xl mx-auto leading-relaxed">
            Tim Pelayanan Relasi kami siap berkoordinasi langsung dengan bagian pengadaan, fakultas, atau panitia wisuda kampus Anda.
        </p>
        @php
            $rawWaServices = $settings->whatsapp ?? '081222569863';
            $waCleanServices = preg_replace('/[^0-9]/', '', $rawWaServices);
            if (str_starts_with($waCleanServices, '0')) {
                $waCleanServices = '62' . substr($waCleanServices, 1);
            }
            $waServicesBottomUrl = "https://wa.me/{$waCleanServices}?text=" . urlencode("Halo CV. HD Mitra Jaya Abadi, saya ingin berkonsultasi mengenai pengadaan kebutuhan KAK kampus.");
        @endphp
        <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="{{ $waServicesBottomUrl }}" target="_blank" rel="noopener noreferrer" class="btn-primary text-sm py-3 px-6 inline-flex items-center gap-2">
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
