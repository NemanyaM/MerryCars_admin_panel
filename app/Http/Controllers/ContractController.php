<?php

namespace App\Http\Controllers;

use App\Car;
use App\Event;
use App\Contract;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contract::latest()->get();
        return view('contract.index', compact('contracts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::get();
        return view('contract.create', compact('cars'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::begintransaction();

            $contract = new Contract;
            $contract->date = $request->get('date');
            $contract->name = $request->get('name');
            $contract->car = $request->get('car');
            $contract->model = $request->get('model');
            $contract->plates = $request->get('plates');
            $contract->time = $request->get('time');
            $contract->plus_hours = $request->get('plus_hours');
            $contract->start_date = $request->get('start_date');
            $contract->end_date = $request->get('end_date');
            $contract->email = $request->get('email');
            $contract->phone = $request->get('phone');
            $contract->address_deliver = $request->get('address_deliver');
            $contract->contact_person = $request->get('contact_person');
            $contract->address_pickup = $request->get('address_pickup');
            $contract->decorations = $request->get('decorations');
            $contract->decorations_price = $request->get('decorations_price');
            $contract->extras = $request->get('extras');
            $contract->total_price = $request->get('total_price');
            $contract->pre_price = $request->get('pre_price');
            $contract->save();

            $event = new Event;
            $event->title = $request->get('car');
            $event->contract_id = $contract->id;
            $event->start_date = $request->get('start_date');
            $event->end_date = $request->get('end_date');
            $event->save();
            DB::commit();

            return redirect($contract->path());

        } catch (\Exception $e){
            DB::rollback();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Contract $contract
     * @return Contract
     */
    public function show(Contract $contract)
    {
        return view('contract.show', compact('contract'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
