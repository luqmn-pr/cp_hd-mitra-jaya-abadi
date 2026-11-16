<?php

namespace Tests\Feature;

use App\Models\Portfolio;
use App\Models\Service;
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
        $response->assertSee('CONTOH LAIN YANG DAPAT DIPESAN');
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
}
