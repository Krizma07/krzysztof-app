<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PowerCalculatorTest extends TestCase
{
    /** @test */
    public function it_displays_power_calculator_page()
    {
        $response = $this->get('/potegowanie');

        $response->assertStatus(200);
        $response->assertSee('Potęgowanie');
    }

    /** @test */
    public function it_calculates_power()
    {
        $response = $this->post('/potegowanie', [
            'number' => 2,
            'exponent' => 3,
        ]);

        $response->assertStatus(200);
        $response->assertSee('Wynik: 8');
    }
}