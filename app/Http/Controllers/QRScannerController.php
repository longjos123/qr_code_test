<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRScannerController extends Controller
{
    public function showScanner()
    {
        return view('scanner');
    }
}
