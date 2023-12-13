<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisionCalculatorController extends Controller
{
    public function show()
    {
        return view('calculations.division');
    }

    public function calculate(Request $request)
    {
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');

        // Sprawdź, czy druga liczba nie jest zerem, aby uniknąć dzielenia przez zero
        if ($number2 != 0) {
            $result = $number1 / $number2;
        } else {
            $result = ['error' => 'Nie można dzielić przez zero.'];
        }

        return view('calculations.division', compact('result'));
    }
}