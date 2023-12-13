<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicationCalculatorController extends Controller
{
    public function show()
    {
        return view('calculations.multiplication');
    }

    public function calculate(Request $request)
    {
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $result = $number1 * $number2;

        return view('calculations.multiplication', compact('result'));
    }
}