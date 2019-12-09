<?php

namespace App\Http\Controllers;
use App\Mail\financeMail;
use App\Quotations;
use App\Leases;
use Illuminate\Http\Request;

class leasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotations = Quotations::All();
        $leasetypes = \App\leaseType::All();
        $financesid = \App\User::All();

        return view('Leases.index', ['quotations' => $quotations ,'leasetypes' => $leasetypes , 'financesid'=>$financesid]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->BKR == "on"){
            $BKR = true;
        }
        else {
            $BKR = false;
        }

//        Leases::insert([
//            'leaseType_id'=>$request->leaseType_id,
//            'customer_id' => $request->customer_id,
//            'finance_id'  =>$request->finance_id,
//            'KVK'         =>$request->KVK,
//            'BKR'         =>$BKR,
//            'appraat'     =>$request->appraat,
//            'price'       =>$request->price,
//            'created_at'  =>now(),
//            'updated_at'  =>now()
//        ]);

        return (new financeMail($request))->render();

//        \Mail::to('roks.freek@gmail.com')->send(new financeMail($request));
//        return redirect(route('home'));
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
        //
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
        //
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
