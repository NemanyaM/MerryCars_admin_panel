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

        $pdf = $this->pdf->loadView('pdf', ['contract' => $contract]);

        return $pdf->download('contract_' . $contract->created_at. '.pdf');
    }
}
