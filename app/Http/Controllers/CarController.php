<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $car = Car::get();
        return view('car.index', compact('car'));
    }

    public function create()
    {
        return view('car.create');
    }

    public function store(Request $request)
    {
        $car = new Car;
        $car->partner = $request->get('partner');
        $car->car = $request->get('car');
        $car->model = $request->get('model');
        $car->plates = $request->get('plates');
        $car->location = $request->get('location');
        $car->price = $request->get('price');
        $car->price_per_hour = $request->get('price_per_hour');
        $car->condition = $request->get('condition');
        $car->start_date = $request->get('start_date');
        $car->end_date = $request->get('end_date');
        $car->save();

        return redirect("/car");
    }
}
