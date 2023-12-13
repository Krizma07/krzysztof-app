<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DivisionCalculatorTest extends TestCase
{
    /** @test */
    public function it_displays_division_calculator_page()
    {
        $response = $this->get('/dzielenie');

        $response->assertStatus(200);
        $response->assertSee('Dzielenie');
    }

    /** @test */
    public function it_calculates_division()
    {
        // Test przypadku poprawnego dzielenia
        $response = $this->post('/dzielenie', [
            'number1' => 10,
            'number2' => 2,
        ]);

        $response->assertStatus(200);
        $response->assertSee('Wynik: 5.0');

        // Test przypadku dzielenia przez zero
        $response = $this->post('/dzielenie', [
            'number1' => 10,
            'number2' => 0,
        ]);

        $response->assertStatus(200);
        $response->assertSee('Błąd: Nie można dzielić przez zero.');
    }
}