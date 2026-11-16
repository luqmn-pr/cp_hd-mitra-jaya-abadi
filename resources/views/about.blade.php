@extends('layouts.app')

@section('title', 'Tentang Kami - ' . ($settings->company_name ?? 'CV. HD Mitra Jaya Abadi'))
@section('description', 'Mengenal lebih dalam CV. HD Mitra Jaya Abadi - profil legalitas, kepemimpinan, visi, misi, dan komitmen pelayanan relasi untuk perguruan tinggi dan instansi.')

@section('content')

{{-- Page Header --}}
<section class="bg-[#F8FAFC] border-b border-[#E2E8F0] py-14 lg:py-16">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        <span class="section-kicker">PROFIL PERUSAHAAN</span>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#0F172A] tracking-tight mt-1">Tentang Kami</h1>
        <p class="text-[#64748B] text-base sm:text-lg max-w-2xl mt-4 leading-relaxed font-normal">
            Mengenal komitmen {{ $settings->company_name ?? 'CV. HD Mitra Jaya Abadi' }} dalam menghadirkan <em>Service Excellent</em> untuk perguruan tinggi dan instansi.
        </p>
        <nav class="flex items-center gap-2 text-xs sm:text-sm text-[#64748B] mt-6 font-medium">
            <a href="{{ route('home') }}" class="hover:text-[#2B3990] transition-colors">Beranda</a>
            <span class="text-slate-300">/</span>
            <span class="text-[#0F172A] font-semibold">Tentang Kami</span>
        </nav>
    </div>
</section>

{{-- Sambutan Direktur (Director's Editorial Message) --}}
<section class="py-16 lg:py-20 bg-white border-b border-[#E2E8F0]">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        <div class="bg-[#F8FAFC] border border-[#E2E8F0] rounded-3xl p-8 sm:p-12 lg:p-14 shadow-sm">
            <div class="grid lg:grid-cols-12 gap-10 items-center">
                
                <!-- Director Quote Text (8 cols) -->
                <div class="lg:col-span-8 order-2 lg:order-1">
                    <span class="section-kicker">KATA SAMBUTAN DIREKTUR</span>
                    <h2 class="text-2xl sm:text-3xl font-bold text-[#0F172A] tracking-tight mb-5 leading-snug">
                        "Memegang Teguh Prinsip Kejujuran, Integritas, dan Kualitas"
                    </h2>
                    
                    <div class="space-y-4 text-sm sm:text-base text-[#475569] leading-relaxed font-normal">
                        <p>
                            <em>"Kepada Para Mitra, Pelanggan, dan Rekan Bisnis yang Terhormat,"</em>
                        </p>
                        <p>
                            Puji syukur kami panjatkan ke hadirat Allah SWT, karena atas rahmat dan hidayah-Nya, kami dapat senantiasa hadir dan bertumbuh dalam mendampingi berbagai kebutuhan institusi Anda.
                        </p>
                        <p>
                            Sebagai Direktur dari <strong>CV. HD Mitra Jaya Abadi</strong>, saya dengan rendah hati memperkenalkan perusahaan kami yang terus berikhtiar menyempurnakan pelayanan dalam bidang percetakan, konveksi seragam, pengadaan barang dan jasa, serta pengembangan teknologi informasi. Kami berkomitmen untuk memberikan layanan terbaik kepada Anda semua, dengan memegang teguh prinsip-prinsip kejujuran, integritas, dan kualitas hasil kerja.
                        </p>
                        <p>
                            Kepercayaan yang telah diberikan oleh puluhan perguruan tinggi dan lembaga mitra di wilayah LLDIKTI IV adalah amanah yang senantiasa kami jaga sepenuh hati.
                        </p>
                    </div>

                    <div class="mt-8 pt-6 border-t border-[#E2E8F0] flex items-center justify-between">
                        <div>
                            <h3 class="font-bold text-[#0F172A] text-base sm:text-lg">
                                {{ $settings->director_name ?? 'Devi Indriyani' }}
                            </h3>
                            <p class="text-xs text-[#2B3990] font-bold tracking-wider uppercase mt-0.5">
                                {{ $settings->director_title ?? 'Direktur' }} — CV. HD Mitra Jaya Abadi
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Visual Stamp / Emblem (4 cols) -->
                <div class="lg:col-span-4 order-1 lg:order-2 flex flex-col items-center justify-center text-center">
                    <div class="w-32 h-32 sm:w-40 sm:h-40 rounded-full bg-white border border-[#E2E8F0] p-4 shadow-sm flex items-center justify-center">
                        <img src="{{ asset('images/logo-icon.svg') }}" alt="Emblem {{ $settings?->company_name ?? 'CV. HD Mitra Jaya Abadi' }}" class="w-24 h-24 sm:w-28 sm:h-28 object-contain">
                    </div>
                    <span class="mt-4 text-xs font-bold text-[#0F172A] uppercase tracking-wider">
                        {{ $settings?->company_name ?? 'CV. HD Mitra Jaya Abadi' }}
                    </span>
                    <span class="text-xs text-[#64748B] mt-0.5">
                        Bandung, Jawa Barat · Didirikan {{ $settings->established_date ?? 'Agustus 2021' }}
                    </span>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- Company Narrative & Verified Legal Credentials --}}
<section class="py-20 bg-white border-b border-[#E2E8F0]" id="legalitas">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <!-- Left: Authentic Narrative (7 cols) -->
            <div class="lg:col-span-7">
                <span class="section-kicker">TENTANG KAMI</span>
                <h2 class="section-headline mb-6">
                    Mitra Terpercaya Pengadaan &amp; Solusi Institusi
                </h2>
                
                <p class="text-[#475569] text-base leading-relaxed mb-5 font-normal">
                    <strong>CV. HD MITRA JAYA ABADI</strong> adalah badan usaha resmi yang bergerak dalam bidang penyediaan jasa pengadaan terpadu, meliputi percetakan dokumen, konveksi garmen, pengadaan barang &amp; jasa umum, serta pengembangan sistem informasi institusi.
                </p>

                <p class="text-[#475569] text-base leading-relaxed mb-5 font-normal">
                    Didirikan pada <strong>Agustus tahun 2021</strong> di Kota Bandung, perusahaan kami secara konsisten memposisikan diri sebagai mitra strategis bagi institusi pendidikan tinggi (universitas, institut, sekolah tinggi, politeknik, dan akademi) serta instansi pemerintah.
                </p>

                <p class="text-[#475569] text-base leading-relaxed mb-6 font-normal">
                    Kekuatan utama kami diperkuat oleh tenaga <strong>“Pelayanan Relasi” (Account Executive)</strong> yang menangani setiap proses pekerjaan secara bertanggung jawab, responsif, dan profesional. Tim Pelayanan Relasi kami siap mendampingi mitra mulai dari perencanaan spesifikasi bahan, penyusunan RAB yang transparan, hingga kelengkapan berkas pertanggungjawaban SPJ.
                </p>

                <!-- Legal Identity Card -->
                <div class="bg-[#F8FAFC] border border-[#E2E8F0] rounded-2xl p-6 sm:p-7 shadow-2xs">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold text-[#2B3990] uppercase tracking-wider block">
                            Legalitas &amp; Izin Operasional Resmi
                        </span>
                        <span class="text-[11px] font-semibold text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-full border border-emerald-200">
                            Terverifikasi OSS
                        </span>
                    </div>
                    <div class="grid sm:grid-cols-2 gap-4 text-xs sm:text-sm">
                        <div class="bg-white p-3 rounded-xl border border-[#E2E8F0]">
                            <span class="text-[#64748B] block text-xs uppercase tracking-wider mb-0.5">Bentuk Usaha</span>
                            <strong class="text-[#0F172A]">Persekutuan Komanditer (CV)</strong>
                        </div>
                        <div class="bg-white p-3 rounded-xl border border-[#E2E8F0]">
                            <span class="text-[#64748B] block text-xs uppercase tracking-wider mb-0.5">Nomor Induk Berusaha (NIB)</span>
                            <div class="flex items-center justify-between">
                                <strong class="text-[#0F172A] font-mono">{{ $settings->nib ?? '2008210031124' }}</strong>
                                <button type="button" 
                                        onclick="navigator.clipboard.writeText('{{ $settings->nib ?? '2008210031124' }}'); this.textContent = 'OK'; setTimeout(() => this.textContent = 'Salin', 2000);"
                                        class="text-[11px] text-[#2B3990] bg-[#EBF3FE] px-2 py-0.5 rounded hover:bg-blue-100 transition-colors">
                                    Salin
                                </button>
                            </div>
                        </div>
                        <div class="bg-white p-3 rounded-xl border border-[#E2E8F0]">
                            <span class="text-[#64748B] block text-xs uppercase tracking-wider mb-0.5">Akta Notaris</span>
                            <strong class="text-[#0F172A]">{{ $settings->notary_deed ?? 'Tina Martina, S.H., M.KN.' }}</strong>
                        </div>
                        <div class="bg-white p-3 rounded-xl border border-[#E2E8F0]">
                            <span class="text-[#64748B] block text-xs uppercase tracking-wider mb-0.5">Waktu Pendirian</span>
                            <strong class="text-[#0F172A]">{{ $settings->established_date ?? 'Agustus 2021' }}</strong>
                        </div>
                    </div>

                    @if(!empty($settings?->address))
                        <div class="mt-4 pt-4 border-t border-[#E2E8F0] text-xs text-[#475569]">
                            <span class="text-[#64748B] block text-xs uppercase tracking-wider mb-0.5">Alamat Kantor &amp; Workshop</span>
                            <span class="text-[#0F172A] font-medium">{{ $settings->address }}</span>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Right: 4 Active Service Focus (5 cols) -->
            <div class="lg:col-span-5">
                <div class="bg-[#0F172A] rounded-3xl p-8 sm:p-10 text-white shadow-md">
                    <span class="text-xs font-bold text-blue-300 uppercase tracking-widest block mb-2">
                        FOKUS 4 BIDANG RESMI
                    </span>
                    <h3 class="text-2xl font-bold text-white mb-6 leading-snug">
                        Spesialisasi Pengadaan Kampus
                    </h3>

                    <div class="space-y-4">
                        <div class="p-4 rounded-xl bg-slate-900 border border-slate-800">
                            <div class="font-bold text-white text-sm">1. Percetakan Kampus</div>
                            <div class="text-xs text-slate-300 mt-1 leading-relaxed">Map ijazah emboss foil emas, majalah profil, buku wisuda, modul ajar, dan amplop kop surat dinas.</div>
                        </div>

                        <div class="p-4 rounded-xl bg-slate-900 border border-slate-800">
                            <div class="font-bold text-white text-sm">2. Konveksi &amp; Garment</div>
                            <div class="text-xs text-slate-300 mt-1 leading-relaxed">Paket toga wisuda lengkap (jubah, samir, topi), jas almamater kampus, kaos PKKMB, dan seragam medis.</div>
                        </div>

                        <div class="p-4 rounded-xl bg-slate-900 border border-slate-800">
                            <div class="font-bold text-white text-sm">3. Pengadaan Barang &amp; Jasa</div>
                            <div class="text-xs text-slate-300 mt-1 leading-relaxed">Plakat kristal 3D laser, plakat kayu kuningan timbul, medali wisuda cor, dan cinderamata tumbler custom gift box.</div>
                        </div>

                        <div class="p-4 rounded-xl bg-slate-900 border border-slate-800">
                            <div class="font-bold text-white text-sm">4. Sistem Informasi Kampus</div>
                            <div class="text-xs text-slate-300 mt-1 leading-relaxed">SIAKAD terintegrasi PDDIKTI, SIMPEG kepegawaian, E-Arsip digital LLDIKTI IV, dan portal PMB online.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Alur Kerja Pengadaan Institusi (Procurement Workflow) --}}
<section class="py-20 bg-white border-b border-[#E2E8F0]">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="section-kicker">ALUR KERJA PENGADAAN</span>
            <h2 class="section-headline">
                Standar Pelayanan Transparan &amp; Akuntabel
            </h2>
            <p class="section-lead mx-auto">
                Setiap pengadaan dikawal oleh Account Executive untuk menjamin spesifikasi presisi, garansi tepat waktu, dan kelengkapan berkas audit.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-[#F8FAFC] rounded-2xl p-6 border border-[#E2E8F0]">
                <span class="text-xs font-mono font-bold text-[#2B3990] bg-[#EBF3FE] px-2.5 py-1 rounded-md mb-4 inline-block">01</span>
                <h3 class="text-base font-bold text-[#0F172A] mb-2">Konsultasi KAK &amp; RAB</h3>
                <p class="text-xs text-[#64748B] leading-relaxed">
                    Pembahasan Kerangka Acuan Kerja (KAK), penentuan volume kebutuhan, dan penyusunan estimasi anggaran biaya (RAB) yang transparan.
                </p>
            </div>

            <div class="bg-[#F8FAFC] rounded-2xl p-6 border border-[#E2E8F0]">
                <span class="text-xs font-mono font-bold text-[#2B3990] bg-[#EBF3FE] px-2.5 py-1 rounded-md mb-4 inline-block">02</span>
                <h3 class="text-base font-bold text-[#0F172A] mb-2">Sampel &amp; Approval Bahan</h3>
                <p class="text-xs text-[#64748B] leading-relaxed">
                    Pengiriman sampel fisik bahan (kain toga, map ijazah kulit ASE, warna foil emas) untuk persetujuan panitia sebelum produksi massal.
                </p>
            </div>

            <div class="bg-[#F8FAFC] rounded-2xl p-6 border border-[#E2E8F0]">
                <span class="text-xs font-mono font-bold text-[#2B3990] bg-[#EBF3FE] px-2.5 py-1 rounded-md mb-4 inline-block">03</span>
                <h3 class="text-base font-bold text-[#0F172A] mb-2">Produksi &amp; Quality Control</h3>
                <p class="text-xs text-[#64748B] leading-relaxed">
                    Pengerjaan di workshop dengan pengawasan standar mutu ketat, jahitan rapi, dan timeline terjadwal sebelum hari pelaksanaan acara.
                </p>
            </div>

            <div class="bg-[#F8FAFC] rounded-2xl p-6 border border-[#E2E8F0]">
                <span class="text-xs font-mono font-bold text-[#2B3990] bg-[#EBF3FE] px-2.5 py-1 rounded-md mb-4 inline-block">04</span>
                <h3 class="text-base font-bold text-[#0F172A] mb-2">BAST &amp; SPJ Lengkap</h3>
                <p class="text-xs text-[#64748B] leading-relaxed">
                    Pengiriman aman ke kampus disertai Berita Acara Serah Terima (BAST), faktur pajak resmi, kwitansi, dan kelengkapan SPJ keuangan.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Vision & Mission --}}
<section class="py-20 bg-[#F8FAFC] border-b border-[#E2E8F0]" id="standar">
    <div class="max-w-7xl 2xl:max-w-[1380px] mx-auto px-6 sm:px-8 lg:px-10 xl:px-12">
        
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="section-kicker">NILAI &amp; ARAH PERUSAHAAN</span>
            <h2 class="section-headline">Visi &amp; Misi</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Visi -->
            <div class="bg-white rounded-2xl p-8 sm:p-10 border border-[#E2E8F0] shadow-2xs">
                <div class="w-12 h-12 bg-[#EBF3FE] text-[#2B3990] rounded-full flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 14c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-[#0F172A] mb-3">Visi Kami</h3>
                <p class="text-[#475569] text-sm sm:text-base leading-relaxed font-normal">
                    Menjadi solusi terpercaya dan terdepan dalam bidang jasa dengan memberikan pelayanan terbaik dan mengutamakan kepuasan pelanggan serta berkontribusi positif dalam pembangunan industri di Indonesia.
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-white rounded-2xl p-8 sm:p-10 border border-[#E2E8F0] shadow-2xs">
                <div class="w-12 h-12 bg-[#EBF3FE] text-[#2B3990] rounded-full flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-[#0F172A] mb-3">Misi Kami</h3>
                <ul class="text-[#475569] space-y-3 text-xs sm:text-sm leading-relaxed font-normal">
                    <li class="flex items-start gap-2.5">
                        <span class="text-[#2B3990] font-bold">✓</span>
                        <span>Memberikan layanan jasa berkualitas tinggi dalam bidang percetakan, konveksi, pengadaan barang/jasa, dan sistem informasi.</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="text-[#2B3990] font-bold">✓</span>
                        <span>Mengutamakan kepuasan pelanggan dengan menyediakan produk dan layanan yang sesuai dengan kebutuhan dan harapan institusi.</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="text-[#2B3990] font-bold">✓</span>
                        <span>Menjadi mitra kerja yang dapat diandalkan bagi pelanggan, mitra bisnis, dan stakeholder kampus.</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="text-[#2B3990] font-bold">✓</span>
                        <span>Berkomitmen untuk berkontribusi positif dalam pembangunan masyarakat sekitar dan meningkatkan kesejahteraan bersama.</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>

{{-- Institutional CTA --}}
<section class="py-20 bg-[#EBF3FE] border-b border-[#CBD5E1]/40 text-center">
    <div class="max-w-4xl mx-auto px-4">
        <span class="section-kicker text-[#2B3990]">PELAYANAN RELASI</span>
        <h2 class="text-3xl sm:text-4xl font-bold text-[#0F172A] tracking-tight">Mari Bersinergi Bersama Kami</h2>
        <p class="text-[#475569] text-sm sm:text-base mt-4 max-w-xl mx-auto leading-relaxed font-normal">
            Percayakan pengadaan institusi Anda kepada mitra yang berpengalaman, berizin resmi, dan mengedepankan Service Excellent.
        </p>
        @php
            $rawWa = $settings->whatsapp ?? '081222569863';
            $waClean = preg_replace('/[^0-9]/', '', $rawWa);
            if (str_starts_with($waClean, '0')) {
                $waClean = '62' . substr($waClean, 1);
            }
            $waAboutUrl = "https://wa.me/{$waClean}?text=" . urlencode("Halo CV. HD Mitra Jaya Abadi, saya ingin berkonsultasi terkait kebutuhan pengadaan institusi kami.");
        @endphp
        <div class="flex flex-wrap justify-center gap-4 mt-8">
            <a href="{{ $waAboutUrl }}" target="_blank" rel="noopener noreferrer" class="btn-primary text-sm py-3.5 px-7 inline-flex items-center gap-2">
                <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                <span>Konsultasi via WhatsApp</span>
            </a>
            <a href="{{ route('home') }}#kontak" class="btn-outline text-sm py-3.5 px-7">
                Lihat Kontak &amp; Lokasi Kantor
            </a>
        </div>
    </div>
</section>

@endsection
