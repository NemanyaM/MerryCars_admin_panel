<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DiaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $diary = Diary::get()->latest();
        return view('diary.index', compact('diary'));
    }

    public function edit($id)
    {
        $diary = Diary::with('contract')->where('contract_id', $id)->first();

        return view('diary.edit', compact('diary'));
    }

    public function update(Request $request, $id)
    {
        try {
            DB::begintransaction();

            $diary = Diary::find($id);
            $diary->reservation_date = $request->get('reservation_date');
            $diary->car = $request->get('car');
            $diary->event_date = $request->get('event_date');
            $diary->hours_amount = $request->get('hours_amount');
            $diary->hours_to_deliver = $request->get('hours_to_deliver');
            $diary->decorations = $request->get('decorations');
            $diary->extras = $request->get('extras');
            $diary->price_per_hour = $request->get('price_per_hour');
            $diary->sum = $request->get('sum');
            $diary->time_to_deliver = $request->get('time_to_deliver');
            $diary->address_to_deliver = $request->get('address_to_deliver');
            $diary->pre_paid = $request->get('pre_paid');
            $diary->amount_to_pay_owner = $request->get('amount_to_pay_owner');
            $diary->amount_to_pay_contractor = $request->get('amount_to_pay_contractor');
            $diary->paid = $request->get('paid');
            $diary->comments = $request->get('comments');
            $diary->notification = $request->get('notification');
            $diary->question = $request->get('question');
            $diary->update();

            DB::commit();

            return redirect('/contract');

        } catch (\Exception $e){
            DB::rollback();

            return redirect('/contract');
        }
    }
}
