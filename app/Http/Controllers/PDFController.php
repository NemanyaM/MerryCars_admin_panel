<?php

namespace App\Http\Controllers;

use App\Contract;
use Barryvdh\DomPDF\PDF;

class PDFController extends Controller
{
    protected $pdf;

    public function __construct(PDF $pdf)
    {
        $this->pdf = $pdf;
    }

    public function pdf($id)
    {
        $id = (int)$id;

        $contract  = Contract::where('id', $id)->first();

        $sum = $this->sum($contract);

        $pdf = $this->pdf->loadView('pdf', ['contract' => $contract, 'sum' => $sum]);

        return $pdf->download('contract_' . $contract->created_at. '.pdf');
    }

    public function sum($model)
    {
        return ($model->choose_car_price * $model->amount_of_hours) + ($model->choose_car_price * $model->plus_hours);
    }
}
