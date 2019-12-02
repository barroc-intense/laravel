<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Quotation;

class quotationsController extends Controller
{
    public function index()
    {
        return view('buy');
    }

    public function mail(Request $request)
    {
        dd($request->type);
        // \Mail::to(sales medewerker);
    }
}
