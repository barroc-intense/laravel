<?php

namespace App\Http\Controllers;

use App\User;
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
        $data = User::query('select email from `users` where `role_id` = 12')->first();


        \Mail::to('roks.freek@gmail.com')->send(new Quotation($request));
        return redirect()->route('home');
    }
}
