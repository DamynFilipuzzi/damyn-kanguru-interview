<?php

namespace App\Http\Controllers;

use App\Mail\CarCreated;
use App\Models\car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'model_name' => 'required|max:255',
            'brand' => 'required|max:255',
            'color' => 'required|max:40',
            'year' => 'required|numeric',
            'release_date' => 'required|date'
        ]);

        if (Car::where('brand', '=', $request->get('brand'))->exists()) {
            return redirect()->route('carCreate');
        }

        $car = Car::create([
            'model_name' => $request->get('model_name'),
            'brand' => $request->get('brand'),
            'color' => $request->get('color'),
            'year' => $request->get('year'),
            'release_date' => $request->get('release_date'),
        ]);

        Mail::to('damynfilipuzzi@gmail.com')->send(new CarCreated($car));

        return redirect()->route('carCreate');
    }

    /**
     * Display the specified resource.
     */
    public function show(car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(car $car)
    {
        //
    }
}
