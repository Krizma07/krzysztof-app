<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PowerCalculatorController extends Controller
{
    public function show()
    {
        return view('calculations.power');
    }

    public function calculate(Request $request)
    {
        $number = $request->input('number');
        $exponent = $request->input('exponent');
        $result = pow($number, $exponent);

        return view('calculations.power', compact('result'));
    }
}