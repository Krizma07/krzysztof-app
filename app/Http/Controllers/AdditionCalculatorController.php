<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdditionCalculatorController extends Controller
{
    public function show()
    {
        return view('calculations.addition');
    }

    public function calculate(Request $request)
    {
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $result = $number1 + $number2;

        return view('calculations.addition', compact('result'));
    }
}
