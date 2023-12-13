<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MultiplicationCalculatorTest extends TestCase
{
    /** @test */
    public function it_displays_multiplication_calculator_page()
    {
        $response = $this->get('/mnozenie');

        $response->assertStatus(200);
        $response->assertSee('Mnożenie');
    }

    /** @test */
    public function it_calculates_multiplication()
    {
        $response = $this->post('/mnozenie', [
            'number1' => 5,
            'number2' => 10,
        ]);

        $response->assertStatus(200);
        $response->assertSee('Wynik: 50');
    }
}