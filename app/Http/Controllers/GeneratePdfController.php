<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequest;

class GeneratePdfController extends Controller
{
    public function generate(DataRequest $request)
    {
        $data = $request->all();
        $barcodes = [];
        $limit = $data['start'] + $data['quantity'];

        for ($i = $data['start']; $i < $limit; $i++) {

            $sufix = str_pad($i, strlen($limit), '0', STR_PAD_LEFT);

            $barcodes[] = $data['prefix'] . $sufix;
        }

        $view =  \View::make('layout_print', compact('barcodes'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper([0, 0, 141.7323, 85.03938]);

        return $pdf->stream();
    }
}
