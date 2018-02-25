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
        $car->car = $request->get('car');
        $car->model = $request->get('model');
        $car->plates = $request->get('plates');
        $car->our_price_no_season_workday = $request->get('our_price_no_season_workday');
        $car->our_price_no_season_weekend = $request->get('our_price_no_season_weekend');
        $car->our_price_season_workday = $request->get('our_price_season_workday');
        $car->our_price_season_weekend = $request->get('our_price_season_weekend');
        $car->partner_price_no_season_workday = $request->get('partner_price_no_season_workday');
        $car->partner_price_no_season_weekend = $request->get('partner_price_no_season_weekend');
        $car->partner_price_season_workday = $request->get('partner_price_no_season_workday');
        $car->partner_price_season_weekend = $request->get('partner_price_no_season_weekend');
        $car->owner = $request->get('owner');
        $car->phone = $request->get('phone');
        $car->bank_account = $request->get('bank_account');
        $car->save();

        return redirect("/car");
    }
}
