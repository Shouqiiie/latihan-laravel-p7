<?php

namespace Tests\Feature;

use App\Models\Package;
use Database\Seeders\PackageSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CompanyProfileTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(PackageSeeder::class);
    }

    public function test_home_page_loads_with_brand_and_menus(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Rahmah Travel');
        $response->assertSee('PT Rahmah Group Internasional');
        $response->assertSee('Beranda');
        $response->assertSee('Tentang Kami');
        $response->assertSee('Paket Umroh');
        $response->assertSee('Kontak');
    }

    /**
     * Menu 2: About page loads successfully.
     */
    public function test_about_page_loads(): void
    {
        $response = $this->get('/tentang-kami');

        $response->assertStatus(200);
        $response->assertSee('Tentang Kami');
        $response->assertSee('Visi Perusahaan');
        $response->assertSee('Misi Perusahaan');
    }

    /**
     * Menu 3: Packages index displays all seeded packages with images.
     */
    public function test_packages_index_displays_data_and_images(): void
    {
        $response = $this->get('/paket-umroh');

        $response->assertStatus(200);
        $response->assertSee('Daftar Paket Umroh');
        $response->assertSee('images/packages/package-1.jpg');
        $response->assertSee('Paket Umroh High Season Plus Thoif by IndiGo (12 Hari)');
    }

    /**
     * Package detail page loads successfully.
     */
    public function test_package_detail_page_loads(): void
    {
        $package = Package::first();

        $this->assertNotNull($package);

        $response = $this->get('/paket-umroh/'.$package->id);

        $response->assertStatus(200);
        $response->assertSee($package->name);
        $response->assertSee($package->airline);
        $response->assertSee($package->hotel_makkah);
    }

    /**
     * Menu 4: Contact page loads successfully.
     */
    public function test_contact_page_loads(): void
    {
        $response = $this->get('/kontak');

        $response->assertStatus(200);
        $response->assertSee('Kontak Kami');
        $response->assertSee('Kantor Pusat Jakarta');
    }
}
