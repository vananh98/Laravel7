<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\User;

class pdfController extends Controller
{
    //
    public function get()
    {
        $users = User::all();
        return view('pdf', compact('users'));
    }
    public function pdf()
    {
        $users = User::all();
        $pdf = PDF::loadView('pdf', compact('users'));
        return $pdf->download('aaa.pdf');
    }
}
