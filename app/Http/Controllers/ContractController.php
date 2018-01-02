<?php

namespace App\Http\Controllers;

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
        return view('contract.create');
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
            $contract->name = $request->get('name');
            $contract->email = $request->get('email');
            $contract->phone = $request->get('phone');
            $contract->date = $request->get('date');
            $contract->partner = $request->get('partner');
            $contract->car = $request->get('car');
            $contract->model = $request->get('model');
            $contract->address_deliver = $request->get('address_deliver');
            $contract->address_pickup = $request->get('address_pickup');
            $contract->discount = $request->get('discount');
            $contract->decorations = $request->get('decorations');
            $contract->save();

            $event = new Event;
            $event->title = $request->get('car');
            $event->contract_id = $contract->id;
            $event->start_date = $request->get('date');
            $event->end_date =  Carbon::now()->addDays(3);
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
