<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubtractionCalculatorTest extends TestCase
{
    /** @test */
    public function it_displays_subtraction_calculator_page()
    {
        $response = $this->get('/odejmowanie');

        $response->assertStatus(200);
        $response->assertSee('Odejmowanie');
    }

    /** @test */
    public function it_calculates_subtraction()
    {
        $response = $this->post('/odejmowanie', [
            'number1' => 10,
            'number2' => 5,
        ]);

        $response->assertStatus(200);
        $response->assertSee('Wynik: 5');
    }
}