<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_profile_page_renders_mahasiswa_details(): void
    {
        $response = $this->get('/profile');

        $response->assertSeeText('Bunga Sartika');
        $response->assertSeeText('UNPAM - Sistem Informasi');
    }

    public function test_about_page_renders_website_information(): void
    {
        $response = $this->get('/about');

        $response->assertSeeText('Tentang Website');
    }
}
