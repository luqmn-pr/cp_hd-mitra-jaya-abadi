<?php

namespace Tests\Feature;

use App\Models\Layanan;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\User;
use Database\Seeders\ContentSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CompanyProfilePageTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(ContentSeeder::class);
    }

    public function test_homepage_is_accessible(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('HD Mitra Jaya Abadi');
        $response->assertSee('Percetakan');
        $response->assertSee('Konveksi');
    }

    public function test_about_page_is_accessible(): void
    {
        $response = $this->get(route('about'));

        $response->assertStatus(200);
        $response->assertSee('Tentang Kami');
        $response->assertSee('Visi Kami');
    }

    public function test_services_page_is_accessible(): void
    {
        $response = $this->get(route('services'));

        $response->assertStatus(200);
        $response->assertSee('Layanan Kami');
        $response->assertSee('Percetakan');
        $response->assertSee('Konveksi');
        $response->assertSee('Pengadaan Barang &amp; Jasa', false);
        $response->assertSee('Sistem Informasi');
    }

    public function test_service_detail_page_is_accessible(): void
    {
        $service = Service::first();
        $this->assertNotNull($service);

        $response = $this->get(route('service.detail', $service->slug));

        $response->assertStatus(200);
        $response->assertSee($service->name);
        $response->assertSee('Portofolio '.$service->name);
        $response->assertSee('Contoh Produk Lainnya');
        $response->assertDontSee('PORTOFOLIO RESMI');
        $response->assertDontSee('Standar Pengerjaan &amp; Administrasi', false);
    }

    public function test_portfolio_page_is_accessible(): void
    {
        $response = $this->get(route('portfolio'));

        $response->assertStatus(200);
        $response->assertSee('Portfolio Proyek');
    }

    public function test_portfolio_page_can_filter_by_service_slug(): void
    {
        $service = Service::where('slug', 'konveksi')->first();
        $this->assertNotNull($service);

        $response = $this->get(route('portfolio', ['kategori' => $service->slug]));

        $response->assertStatus(200);
        $response->assertSee($service->name);
    }

    public function test_portfolio_detail_page_is_accessible(): void
    {
        $portfolio = Portfolio::published()->first();
        $this->assertNotNull($portfolio);

        $response = $this->get(route('portfolio.detail', $portfolio->slug));

        $response->assertStatus(200);
        $response->assertSee($portfolio->title);
    }

    public function test_contact_page_redirects_to_home_contact_section(): void
    {
        $response = $this->get(route('contact'));

        $response->assertRedirect('/#kontak');
    }

    public function test_home_page_contains_contact_section(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('id="kontak"', false);
        $response->assertSee('Kantor &amp; Workshop', false);
    }

    public function test_service_detail_contains_whatsapp_cta(): void
    {
        $service = Service::where('is_active', true)->first();
        $this->assertNotNull($service);

        $response = $this->get(route('service.detail', $service->slug));

        $response->assertStatus(200);
        $response->assertSee('wa.me', false);
    }

    public function test_portfolio_detail_contains_whatsapp_cta(): void
    {
        $portfolio = Portfolio::published()->first();
        $this->assertNotNull($portfolio);

        $response = $this->get(route('portfolio.detail', $portfolio->slug));

        $response->assertStatus(200);
        $response->assertSee('wa.me', false);
    }

    public function test_filament_admin_login_is_accessible(): void
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
    }

    public function test_layanan_model_works_interchangeably_with_service(): void
    {
        $layanan = Layanan::where('slug', 'percetakan')->first();
        $this->assertNotNull($layanan);
        $this->assertSame('Percetakan', $layanan->name);

        $service = Service::where('slug', 'percetakan')->first();
        $this->assertNotNull($service);
        $this->assertSame($layanan->id, $service->id);

        $portfolio = Portfolio::published()->where('service_id', $layanan->id)->first();
        if ($portfolio) {
            $this->assertSame($layanan->id, $portfolio->layanan->id);
            $this->assertSame($service->id, $portfolio->service->id);
        }
    }

    public function test_filament_admin_navigation_has_layanan_and_kontak_and_no_inquiries(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin');
        $response->assertStatus(200);
        $response->assertSee('Layanan');
        $response->assertSee('Kontak');
        $response->assertDontSee('Pesan Masuk');
        $response->assertDontSee('/admin/inquiries');
    }

    public function test_filament_layanan_and_kontak_routes_are_accessible(): void
    {
        $user = User::factory()->create();

        $responseLayanan = $this->actingAs($user)->get('/admin/layanan');
        $responseLayanan->assertStatus(200);

        $responseKontak = $this->actingAs($user)->get('/admin/kontak');
        $responseKontak->assertStatus(200);

        $responseInquiries = $this->actingAs($user)->get('/admin/inquiries');
        $responseInquiries->assertStatus(404);
    }
}
