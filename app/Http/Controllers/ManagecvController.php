<?php

namespace App\Http\Controllers;

use App\Models\managecv;
use PDF;

use Illuminate\Http\Request;

class ManagecvController extends Controller
{

    public function Managecv()
    {
        $managecv = managecv::all();
        return view('welcome', ['managecv' => $managecv]);
    }
    public function Download()
    {
        $managecv = managecv::all();
        $pdf = PDF::loadView('pdf', compact('managecv'));
        return $pdf->stream();
        // $managecv = Managecv::all();
        // $pdf = Pdf::loadView('pdf', compact('managecv'));
        // return $pdf->stream();
        // dd($profile);
    }
}
