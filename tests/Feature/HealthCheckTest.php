<?php

namespace Tests\Feature;

use Tests\TestCase;

class HealthCheckTest extends TestCase
{
    public function test_health_check_endpoint_returns_healthy_status()
    {
        $response = $this->get('/health');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'timestamp',
                'version'
            ])
            ->assertJson([
                'status' => 'healthy'
            ]);
    }

    public function test_portfolio_page_loads_successfully()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Faris Habiburrohman');
        $response->assertSee('Universitas Muhammadiyah Semarang');
    }
}