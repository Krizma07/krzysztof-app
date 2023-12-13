<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdditionCalculatorTest extends TestCase
{
    /** @test */
    public function it_displays_addition_calculator_page()
    {
        $response = $this->get('/dodawanie');

        $response->assertStatus(200);
        $response->assertSee('Dodawanie');
    }

    /** @test */
    public function it_calculates_addition()
    {
        $response = $this->post('/dodawanie', [
            'number1' => 5,
            'number2' => 10,
        ]);

        $response->assertStatus(200);
        $response->assertSee('Wynik: 15');
    }
}