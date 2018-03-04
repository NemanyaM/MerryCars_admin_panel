<?php

namespace App\Http\Controllers;

use App\Finance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $finance = Finance::with('contract')->where('contract_id', $id)->first();

        return view('finance.edit', compact('finance'));
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
        try {
            DB::begintransaction();

        $finance = Finance::find($id);
        $finance->for_rent = $request->get('for_rent');
        $finance->us_for_decorations = $request->get('us_for_decorations');
        $finance->us_for_extras = $request->get('us_for_extras');
        $finance->sum = $request->get('sum');
        $finance->expenses_on_driver = $request->get('expenses_on_driver');
        $finance->driver = $request->get('driver');
        $finance->car_wash = $request->get('car_wash');
        $finance->gas = $request->get('gas');
        $finance->to_car_owner = $request->get('to_car_owner');
        $finance->to_contractor = $request->get('to_contractor');
        $finance->for_decorations = $request->get('for_decorations');
        $finance->our_transfers = $request->get('our_transfers');
        $finance->sum_to_partners = $request->get('sum_to_partners');
        $finance->sum_to_us = $request->get('sum_to_us');
        $finance->to_nastya = $request->get('to_nastya');
        $finance->to_company = $request->get('to_company');
        $finance->car = $request->get('car');
        $finance->event_date = $request->get('event_date');
        $finance->reserve_date = $request->get('reserve_date');
        $finance->our_car_earnings = $request->get('our_car_earnings');
        $finance->partner_car_earnings = $request->get('partner_car_earnings');
        $finance->comments = $request->get('comments');
        $finance->update();

        DB::commit();

        return redirect('/contract');

        } catch (\Exception $e){
            DB::rollback();

            return redirect('/contract');
        }

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
