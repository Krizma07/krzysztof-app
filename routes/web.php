<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\AdditionCalculatorController;
use App\Http\Controllers\SubtractionCalculatorController;
use App\Http\Controllers\MultiplicationCalculatorController;
use App\Http\Controllers\DivisionCalculatorController;
use App\Http\Controllers\PowerCalculatorController;

Route::get('/potegowanie', [PowerCalculatorController::class, 'show'])->name('power.show');
Route::post('/potegowanie', [PowerCalculatorController::class, 'calculate'])->name('power.calculate');

Route::get('/dzielenie', [DivisionCalculatorController::class, 'show'])->name('division.show');
Route::post('/dzielenie', [DivisionCalculatorController::class, 'calculate'])->name('division.calculate');

Route::get('/mnozenie', [MultiplicationCalculatorController::class, 'show'])->name('multiplication.show');
Route::post('/mnozenie', [MultiplicationCalculatorController::class, 'calculate'])->name('multiplication.calculate');

Route::get('/odejmowanie', [SubtractionCalculatorController::class, 'show'])->name('subtraction.show');
Route::post('/odejmowanie', [SubtractionCalculatorController::class, 'calculate'])->name('subtraction.calculate');

Route::get('/dodawanie', [AdditionCalculatorController::class, 'show'])->name('addition.show');
Route::post('/dodawanie', [AdditionCalculatorController::class, 'calculate'])->name('addition.calculate');

Route::get('/', [SampleController::class, 'welcome']);
Route::get('/', function () {return view('welcome');});
